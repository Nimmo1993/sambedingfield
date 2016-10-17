var SAM = SAM || {};

// Console Log Styles
SAM.log = function(text, type){
  var css = 'line-height: 20px; font-size: 13px; font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; color: #fff; font-weight: 200; display: inline-block; border-left: 2px solid #00d4cd; padding: 4px; background-color: #333;';
  switch(type) {
    case 'bad':
      css = css+'border-color: #ff0054;';
      break;
    case 'good':
      css = css+'border-color: #ff9c00;';
      break;
    case 'alert':
      css = css+'border: none; background-color: #222; line-height: 24px; font-size: 15px;';
      break;
  }
  console.log('%c '+text, css);
}

// Responsive Width
SAM.setResponsive = function(){
  // Vars
  var breakpoints = {
        'small': 767,
        'medium': 1400
      },
      $window = $(window);
  // Set responsive size
  function setResponsiveWidth(trigger){
    var widthName = 'large';
    $.each(breakpoints, function(title, maxWidth) {
      if($window.width() <= maxWidth){
        widthName = title;
        return false;
      }
    });
    if(SAM.getResponsive != widthName && trigger){
      SAM.getResponsive = widthName;
      $window.trigger('responsive');
    }
    SAM.getResponsive = widthName;
  }
  // Throttle the resize
  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };
  // Resize images on the fly
  function imageResize(){
    var $resizes = $('*[data-resize]');
    $resizes.each(function(i){
      var $img = $(this),
          bk = $img.data('preload-bk'),
          url = 'media/'+SAM.getResponsive+'/'+bk;
      $img.css({'background-image':'url('+url+')'});
    });
  }
  // Events
  $window.resize(debounce(function(){
    $window.trigger('resizeThrottled');
    setResponsiveWidth(true);
  }, 100));
  $window.on('responsive', function(){
    imageResize();
  });
  setResponsiveWidth();
}

// Preload all image assets
SAM.preload = function($container = $('body')){
  $container.addClass('loading');
  // Get correct media folder
  function mediaFolder($el){
    var folder = 'media/';
    if(typeof $el.data('resize') !== 'undefined'){
      folder = folder+SAM.getResponsive+'/';
    }
    return folder;
  }
  // Vars
  var $preloadImgs = $container.find('*[data-preload-img]'),
      $preloadBks = $container.find('*[data-preload-bk]'),
      preloadTotal = $preloadImgs.length + $preloadBks.length,
      preloadStep = 100 / preloadTotal,
      preloadSrcs = ($preloadImgs.map(function(){
        var $img = $(this);
        return mediaFolder($img)+$img.data("preload-img");
      }).get()).concat($preloadBks.map(function(){
        var $img = $(this);
        return mediaFolder($img)+$img.data("preload-bk");
      }).get());
  // Silently add images into DOM
  var $preloader = $('<div class="preloader"></div>');
  $preloader.appendTo(document.body);
  $.each(preloadSrcs, function(i,source) {
    $('<img style="display:none"/>').attr("src", source).appendTo($preloader);
  });
  // Loaded Progress
  $preloader.imagesLoaded().progress(function(ins,img){
    var percent = Math.ceil(ins.progressedCount*preloadStep),
        file = img.img.src.substring(img.img.src.lastIndexOf('/')+1);
    $('.preloader').width(percent+'%');
    SAM.log('Preloaded: '+percent+'% ('+file+')');
  }).always(function(instance) {
    $preloadImgs.each(function(i){
      var $img = $(this),
          file = $img.data('preload-img');
      $img.attr('src',mediaFolder($img)+file);
    });
    $preloadBks.each(function(i){
      var $img = $(this),
          file = $img.data('preload-bk');
      $img.css({'background-image':'url('+mediaFolder($img)+file+')'});
    });
    $preloader.delay(250).fadeOut(350, function(){
      $preloader.remove();
    });
    $container.removeClass('loading').addClass('preloaded');
    $container.trigger('preloaded');
    setTimeout(function(){
      $container.addClass('delayed');
      if($container.is('.gangsterWrapper')){
        SAM.speechBubbles();
      }
    }, 1000);
  }).done(function(ins){
    SAM.log('PRELOAD COMPLETE', 'good');
  }).fail(function(ins){
    SAM.log('PRELOAD FAILED: Some images could not be loaded', 'bad');
  });
}

// Level Up Animation
SAM.levelUp = function(){
  // Vars
  var level = 1,
      maxLevel = 4,
      flashTime = 150,
      waitTime = 1240,
      $body = $('body'),
      $aside = $('aside'),
      $levelUpButton = $aside.find('a.levelup'),
      $levelUpText = $aside.find('.actions p'),
      $illustration = $aside.find('.illustration'),
      $shadow = $aside.find('.shadow'),
      $background = $aside.find('.background');
  // Functions
  function _levelUp(){
    level++;
    // Activate level class
    $('._l'+level).addClass('active');
    // Play audio
    $('#_powerUp'+level).trigger('play');
    // Animate illustration
    $aside.removeAttr('class').addClass('levelUp_'+level);
    $background.css({'opacity':level*(1/maxLevel)});
    $.each([level, level-1, level, level-1, level], function(i,img){
      setTimeout(function(){
        var url = 'media/'+SAM.getResponsive+'/'+img;
        $illustration.css({'background-image':'url('+url+'.png)'});
        $shadow.css({'background-image':'url('+url+'_shadow.png)'});
      }, flashTime*i);
    });
    // Wait throttle
    $body.addClass('transforming');
    setTimeout(function(){
      $('#_powerUp'+level).trigger('pause').prop("currentTime",0);
      $body.removeClass('transforming');
    }, waitTime);
    // Mobile swipe prompt
    if(level > 1 && level < maxLevel && SAM.getResponsive == 'small'){
      $levelUpText.html('Swipe left or right for more details with each level.');
    }
    // Reached maximum level
    if(level == maxLevel){
      $body.addClass('maximum');
      $levelUpText.html('"This isn\'t even my final form!"<br><a href="#" class="reset">Play again?</a>');
      SAM.log('Level Up: '+level+' "MECHA ACTIVATED!"', 'good');
    } else {
      SAM.log('Level Up: '+level);
    }
  }
  // Events
  $levelUpButton.on('click',function(e){
    e.preventDefault();
    if(level < maxLevel && !$body.hasClass('transforming')){
      _levelUp();
    }
  });
  $levelUpText.on('click', '.reset', function(e){
    e.preventDefault();
    for(var i = 0; i < maxLevel+1; i++) { 
      $('._l'+i).removeClass('active');
    }
    $aside.removeAttr('class');
    $body.removeClass('maximum');
    level = 1;
    var url = 'media/'+SAM.getResponsive+'/'+level;
    $illustration.css({'background-image':'url('+url+'.png)'});
    $shadow.css({'background-image':'url('+url+'_shadow.png)'});
    $background.css({'opacity':'0.1'});
    $levelUpText.html("Click \"Level up\" to view my progression.");
    SAM.log('Level Up: Reset');
  });
}

// Fixed Width Speech Bubbles
SAM.speechBubbles = function(){
  // Vars
  var $window = $(window),
      $contactLis = $('.contact li'),
      $bubbles = $contactLis.find('p');
  // Functions
  function resizeBubbles(){
    $contactLis.width('100%');
    $bubbles.each(function(i){
      $(this).width($(this).width()+2);     
    });
    $contactLis.removeAttr('style');
  }
  $window.on('resizeThrottled', function(){
    resizeBubbles();
  });
  resizeBubbles();
}

// Material Ripples
SAM.ripple = function(){
  $('.button').ripple();
}

// Pop Up Portfolio
SAM.popupPortfolio = function(){
  // Vars
  var $body = $('body'),
      $window = $(window),
      $button = $('.portfolioLink a'),
      $popup = $('.popupPortfolio'),
      $gallery = $popup.find('.gallery'),
      $close = $popup.find('.close a'),
      $slideshows = $popup.find('.slideshow'),
      $videos = $popup.find('video');
  // Video Controls
  function playVideo($video){
    var $work = $video.closest('.work');
    $work.addClass('playing');
    $video[0].play();
  }
  function stopVideo($video){
    var $work = $video.closest('.work');
    $work.removeClass('playing');
    $video[0].pause();
  }
  $videos.each(function(i){
    var $video = $(this),
        $playButton = $video.next('.playButton');
    $playButton.on('click', function(){
      SAM.log('Video: Play');
      playVideo($video);
    });
    $video.on('click', function(){
      SAM.log('Video: Stopped');
      stopVideo($video);
    });
  });
  // Events
  $button.on('click',function(e){
    e.preventDefault();
    $popup.addClass('active');
    $body.addClass('noScroll');
    // preload images on first click
    var firstTime = !$popup.hasClass('loading') && !$popup.hasClass('preloaded');
    if(firstTime){
      SAM.preload($popup);
      SAM.log('Portfolio: Preloading...');
    } else {
      $gallery.packery({
        percentPosition: true
      });
      SAM.log('Portfolio: Re-opened');
    }
    // Autoplay videos
    if(SAM.getResponsive !== 'small'){
      $videos.each(function(i){
        playVideo($(this));
      });
      SAM.log('All Videos: Autoplay');
    }
    $slideshows.trigger('init');
  });
  $close.on('click',function(e){
    e.preventDefault();
    $popup.removeClass('active');
    $body.removeClass('noScroll');
    $slideshows.trigger('reset');
    $gallery.packery('destroy');
    // Stop video playback
    $videos.each(function(i){
      stopVideo($(this));
    });
    SAM.log('Portfolio: Closed and Reset (videos paused)');
  });
  $popup.on('preloaded',function(e){
    $gallery.packery({
      percentPosition: true
    });
    SAM.log('Portfolio: Opened');
  });
  // Stop video playback
  $window.on('responsive', function(){
    if(SAM.getResponsive == 'small'){
      $videos.each(function(i){
        stopVideo($(this));
      });
      SAM.log('All Videos: Paused for mobile');
    }
  });
}

// Gallery Slideshows
SAM.galleryRotate = function(){
  var $slideshows = $('.slideshow');
  $slideshows.each(function(i){
    // Vars
    var $show = $(this),
        $navs = $show.find('.nav a'),
        $images = $show.children('img'),
        $all = $navs.add($images);
    // Go to slide
    function goToSlide($target){
      var $img = $images.eq($target.index()),
          $prev = $images.filter('.active');
      $all.removeClass('prev active');
      $target.add($img).addClass('active');
      $prev.addClass('prev');
    }
    // Auto
    var initDelay = null,
        autoPlay = null;
    $show.on('init', function(e){
      var $target = $navs.filter(':first-child');
      initDelay = setTimeout(function(e){
        goToSlide($target);
        $show.trigger('play');
      }, 250 + (i * 1250));
    });
    $show.on('play', function(e){
      autoPlay = setInterval(function(){
        var $target = $navs.filter('.active').next();
        if($target.length === 0){
          $target = $navs.first();
        }
        goToSlide($target);
      }, 6500);
    });
    $show.on('reset', function(e){
      $show.find('.active').removeClass('active');
      $images.filter(':first-child').addClass('active');
      clearTimeout(initDelay);
      clearInterval(autoPlay);
    });
    // Manual
    $show.on('stop', function(e){
      clearTimeout(initDelay);
      clearInterval(autoPlay);
    });
    $navs.on('click', function(e){
      e.preventDefault();
      var $target = $(this);
      if(!$target.hasClass('active')){
        goToSlide($target);
        $show.trigger('stop').trigger('play');
      }
    });
  });
}

// Mobile and Touch controls
SAM.mobileControls = function(){
  // Vars
  var $window = $(window),
      $main = $('main'),
      state = 2,
      slides = 3;
  // Swiping main content panels
  function swipeState(newState){
    if(SAM.getResponsive !== 'small' || newState < 1 || newState > slides ){
      return false;
    }
    $main.removeAttr('class').addClass('swipeState_'+newState);
    state = newState;
  }
  // Events
  $main.on('swipeleft', function(){
    swipeState(state-1);
  });
  $main.on('swiperight', function(){
    swipeState(state+1);
  });
  $window.on('responsive', function(){
    if(SAM.getResponsive !== 'small'){
      $main.removeAttr('class');
      state = 'middle';
    }
  });
}

// Init functions on ready
$(function() {
  SAM.setResponsive();
  SAM.levelUp();
  SAM.ripple();
  SAM.popupPortfolio();
  SAM.galleryRotate();
  SAM.mobileControls();
});

// Init functions on page load
$(window).load(function(){
  $(".powerUp audio").trigger('load');
  SAM.preload($('.gangsterWrapper'));
  setInterval(function(){
    SAM.log("Thanks for stopping by. Interested in my work? Get in contact: sambedingfield@hotmail.com", 'alert');
  }, 8000);
});
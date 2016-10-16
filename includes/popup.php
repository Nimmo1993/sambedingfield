<div class="popupPortfolio">
  <div class="close">
    <a class="button" href="#"><svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" transform="rotate(-90) translate(-24 0)"/></svg> Back</a>
  </div>
  <div class="gallery">
    <?php foreach($portfolio as $name => $work): ?>
    <div class="work">
      <div class="workInner">
        <div class="media">
        <?php 
        if(isset($work['video'])){
          // Video
          echo '<img '.preloadImg('portfolio/'.$work['video'].'.jpg', false, true).' alt="'.$name.'"><div class="play"></div><video loop preload="none"><source src="media/portfolio/'.$work['video'].'.mp4" type="video/mp4"></video><a class="playButton"></a>';
        } elseif(count($work['images']) > 1){
          // Slideshow Images
          echo '<div class="slideshow">';
          $i = 0;
          foreach($work['images'] as $url){
            $active = $i == 0 ? ' class="active"' : '';
            echo '<img '.preloadImg('portfolio/'.$url, false, true).' alt="'.$name.'"'.$active.'>';
            $i++;
          }
          echo '<nav class="nav">';
          foreach($work['images'] as $url){
            echo '<a href="#"></a>';
            $i++;
          }
          echo '</nav></div>';
        } else {
          // Single Image
          echo '<img '.preloadImg('portfolio/'.$work['images'][0], false, true).' alt="'.$name.'">';
        }
        ?>
        </div>
        <h4><?php echo $name; ?><time datetime="<?php echo $work['date']; ?>"><?php echo $work['date']; ?></time></h4>
        <p><?php echo $work['text']; ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
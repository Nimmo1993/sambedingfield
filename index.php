<?php 
include('vars.php');
include('functions.php');
include('includes/head.php'); 
?>
<body>
  <div class="gangsterWrapper">
    <?php include('includes/header.php'); ?>
    <main>
      <div class="width">
        <section class="personal skills">
          <article class="_l2">
            <h3><svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>Experience</h3>
            <ul>
              <li><div>Top Two Studios (<strong>4 years +</strong>)</div></li>
              <li class="_l3"><div>Jagex Games Studios (<strong>1 Year +</strong>)</div></li>
              <li class="_l4"><div>Creative Sponge (<strong>2 Years +</strong>)</div></li>
            </ul>
          </article>
          <article class="_l2">
            <h3><svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>Education</h3>
            <ul>
              <li><div>GCSE Art &amp; Design (<strong>A*</strong>)</div></li>
              <li><div>BTEC Graphics (<strong>Distinction</strong>)</div></li>
              <li><div>BAHons Animation Degree (<strong>2:1</strong>)</div></li>
            </ul>
          </article>
        </section>
        <section class="code skills">
          <article class="_l2">
            <h3>Front-End<span class="grade"><svg class="_l2" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg><svg class="_l3" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg><svg class="_l4" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg></span></h3>
            <ul>
              <li><div>HTML5, CSS3<span class="_l4">, SASS</span></div></li>
              <li><div>Javascript<span class="_l3">, jQuery</span><span class="_l4">, Underscore</span></div></li>
              <li class="_l3"><div>Thymeleaf<span class="_l4">, Handlebars, Blaze</span></div></li>
            </ul>
          </article>
          <article class="_l3">
            <h3>Server-side<span class="grade"><svg class="_l3" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg><svg class="_l4" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg><svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg></span></h3>
            <ul>
              <li><div>PHP, MySQL (<strong>LAMP</strong>)</div></li>
              <li class="_l4"><div>Node, Mongo (<strong>MEAN</strong>)</div></li>
            </ul>
          </article>
        </section>
        <aside>
          <div class="dome" <?php preloadBk('dome.png', true); ?>></div>
          <div class="background" <?php preloadBk('background.jpg'); ?>></div>
          <div class="doughnut">
            <div class="halfclip">
              <div class="halfcircle clipped"></div>
            </div>
            <div class="halfcircle fixed"></div>
          </div>
          <div class="shadow" <?php preloadBk('1_shadow.png', true); ?>></div>
          <div class="illustration" <?php preloadBk('1.png', true); ?>></div>
          <div class="actions">
            <a href="#" class="levelup button">Level Up <svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"/></svg></a>
            <p>Click "Level up" to view my progression.</p>
          </div>
        </aside>
      </div>
    </main>
    <section class="portfolio">
      <div class="width">
        <div class="portfolioLink">
          <h3>View Portfolio</h3>
          <a class="button" href="#"><svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg></a>
        </div>
      </div>
    </section>
    <?php include('includes/footer.php'); ?>
  </div>
  <?php include('includes/popup.php'); ?>
  <div class="powerUp">
    <audio id="_powerUp2" preload="none">
      <source src="media/power-up.mp3" type="audio/mpeg">
    </audio>
    <audio id="_powerUp3" preload="none">
      <source src="media/power-up.mp3" type="audio/mpeg">
    </audio>
    <audio id="_powerUp4" preload="none">
      <source src="media/power-up-completed.mp3" type="audio/mpeg">
    </audio>
  </div>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
  <?php
  if($dev_mode){
    // JS
    foreach($js as $file){
      echo '<script src="'.$file.'?v='.$v.'"></script>';
    }
  } else {
    // JS
    echo '<script type="text/javascript" src="/min/f='.implode(',', $js).'&v='.$v.'"></script>';
  }
  ?>
</body>
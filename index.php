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
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 700 700" enable-background="new 0 0 700 700" xml:space="preserve">
              <g transform="translate(350, 350) rotate(90)">
                <circle r="344" class="circle-front" />
              </g>
            </svg>
          </div>
          <div class="shadow" <?php preloadBk('1_shadow.png', true); ?>></div>
          <div class="illustration" <?php preloadBk('1.png', true); ?>></div>
          <div class="actions">
            <a href="#" class="levelup button">Level Up <svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"/></svg></a>
            <a class="audioToggle" href="#"><svg class="on" width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M832 352v1088q0 26-19 45t-45 19-45-19l-333-333h-262q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h262l333-333q19-19 45-19t45 19 19 45zm384 544q0 76-42.5 141.5t-112.5 93.5q-10 5-25 5-26 0-45-18.5t-19-45.5q0-21 12-35.5t29-25 34-23 29-35.5 12-57-12-57-29-35.5-34-23-29-25-12-35.5q0-27 19-45.5t45-18.5q15 0 25 5 70 27 112.5 93t42.5 142zm256 0q0 153-85 282.5t-225 188.5q-13 5-25 5-27 0-46-19t-19-45q0-39 39-59 56-29 76-44 74-54 115.5-135.5t41.5-173.5-41.5-173.5-115.5-135.5q-20-15-76-44-39-20-39-59 0-26 19-45t45-19q13 0 26 5 140 59 225 188.5t85 282.5zm256 0q0 230-127 422.5t-338 283.5q-13 5-26 5-26 0-45-19t-19-45q0-36 39-59 7-4 22.5-10.5t22.5-10.5q46-25 82-51 123-91 192-227t69-289-69-289-192-227q-36-26-82-51-7-4-22.5-10.5t-22.5-10.5q-39-23-39-59 0-26 19-45t45-19q13 0 26 5 211 91 338 283.5t127 422.5z"/></svg><svg class="off" width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1280 352v1088q0 26-19 45t-45 19-45-19l-333-333h-262q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h262l333-333q19-19 45-19t45 19 19 45z"/></svg></a>
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
    <img <?php preloadImg('2.png', true); ?> alt="Sam Bedingfield Level 2">
    <img <?php preloadImg('3.png', true); ?> alt="Sam Bedingfield Level 3">
    <img <?php preloadImg('4.png', true); ?> alt="Sam Bedingfield Level 4">
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
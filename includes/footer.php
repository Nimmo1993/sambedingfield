<footer>
  <div class="curve" <?php preloadBk('curve.png', true); ?>></div>
  <div class="width">
    <div class="right">
      <?php
      function getAge($then) {
        $then = date('Ymd', strtotime($then));
        $diff = date('Ymd') - $then;
        return substr($diff, 0, -4);
      }
      ?>
      <h3>Hi, I’m <span>Sam</span> <i>( <?php echo getAge('13th September 1985'); ?> / M / Norfolk, UK )</i></h3>
      <ul>
        <li><strong>Passion for</strong> animation, illustration, editing, UI and UX.</li>
        <li><strong>Appreciates</strong> hand-written, readable, clean code.</li>
        <li><strong>Worked</strong> solo, in small agencies and big Agile teams.</li>
        <li><strong>I'm</strong> hard-working, good-humoured and reliable.</li>
        <li><strong>I loves me some</strong> ale, eSports, board-games and lists.</li>
      </ul>
    </div>
    <div class="middle">
      <ul class="contact">
        <li>
          <p>Email me</p>
          <a href="mailto:sambedingfield@hotmail.com" target="_blank"><img <?php preloadImg('contact_email.png'); ?> alt="email"></a>
        </li>
        <li>
          <p>Take a look at my code</p>
          <a href="https://github.com/sambedingfield" target="_blank"><img <?php preloadImg('contact_github.png'); ?> alt="github"></a>
        </li>
        <li>
          <p>View my LinkedIn Profile</p>
          <a href="https://uk.linkedin.com/in/sambedingfield
" target="_blank"><img <?php preloadImg('contact_linkedin.png'); ?> alt="linkedin"></a>
        </li>
        <li>
          <p>Chat with me on Skype</p>
          <a href="skype:sambedingfield?add" target="_blank"><img <?php preloadImg('contact_skype.png'); ?> alt="skype"></a>
        </li>
        <li>
          <p>Add me on Facebook</p>
          <a href="https://www.facebook.com/sambedingfield" target="_blank"><img <?php preloadImg('contact_facebook.png'); ?> alt="facebook"></a>
        </li>
        <li>
          <p>Tweet me</p>
          <a href="https://twitter.com/RatsClan" target="_blank"><img <?php preloadImg('contact_twitter.png'); ?> alt="twitter"></a>
        </li>
        <li>
          <p>Gamertag: 'Mech Rat' on Steam and Xbox Live</p>
          <a href="https://account.xbox.com/en-US/Profile?gamerTag=Mech%20Rat" target="_blank"><img <?php preloadImg('contact_game.png'); ?> alt="gamertag"></a>
        </li>
      </ul>
    </div>
    <div class="left">
      <a class="cv button" target="_blank" href="https://docs.google.com/document/d/1ICaagT_tzLiQsRXw60UT-cYDJPGpwwMZrsGgce34GFA/edit?usp=sharing"><svg fill="#00d4cd" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>Download CV</a>
    </div>
  </div>
</footer>
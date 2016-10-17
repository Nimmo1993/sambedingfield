<!doctype html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <meta charset="utf-8">
  <meta name="description" content="<?php echo $page_desc; ?>">
  <meta name="author" content="Sam Bedingfield">
  <title><?php echo $page_title; ?></title>
  <meta property="og:url" content="http://www.sambedingfield.com" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Online Portfolio" />
  <meta property="og:site_name" content="Sam Bedingfield" />
  <meta property="og:description" content="Website Development" />
  <meta property="og:image" content="media/social-share.jpg?v=<?php echo $v; ?>" />
  <?php
  if($dev_mode){
    // CSS
    foreach($css as $file){
      echo '<link rel="stylesheet" rel="stylesheet" href="'.$file.'?v='.$v.'" />';
    }
  } else {
    // CSS
    echo '<link rel="stylesheet" href="/min/f='.implode(',', $css).'&v='.$v.'">';
  }
  ?>
  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=<?php echo $v; ?>">
  <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png?v=<?php echo $v; ?>" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png?v=<?php echo $v; ?>" sizes="16x16">
  <link rel="manifest" href="/favicons/manifest.json?v=<?php echo $v; ?>">
  <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=<?php echo $v; ?>" color="#009994">
  <link rel="shortcut icon" href="/favicons/favicon.ico?v=<?php echo $v; ?>">
  <meta name="apple-mobile-web-app-title" content="Sam Bedingfield">
  <meta name="application-name" content="Sam Bedingfield">
  <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=<?php echo $v; ?>">
  <meta name="theme-color" content="#009994">
</head>
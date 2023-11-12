<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property="og:type" content="website">
  <meta property="og:title" content="mskab portfolio">
  <meta property="og:url" content="https://mskab.com/">
  <meta property="og:description" content="mskabのポートフォリオサイトです。デザインから生まれる人と人とのつながりを大切に、制作させていただきます。">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.png">
  <meta name="description" content="mskabのポートフォリオサイトです。デザインから生まれる人と人とのつながりを大切に、制作させていただきます。" />
  <title>mskab portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Gothic+A1:wght@100;400&family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/styles/ress.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/styles/style.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="header">
    <div class="container">
      <p class="header-logo">
        <a href="/">mskab</a>
      </p>
      <nav class="gnav" id="js-nav">
        <ul class="gnav-list">
          <?php
            if(is_home()) {
              $home_url = '';
            } else {
              $home_url = home_url();
            }
          ?>
          <li class="gnav-item"><a href="<?php echo $home_url; ?>#about">ABOUT</a></li>
          <li class="gnav-item"><a href="<?php echo $home_url; ?>#skill">SKILL</a></li>
          <li class="gnav-item"><a href="<?php echo $home_url; ?>#works">WORKS</a></li>
          <li class="gnav-item"><a href="<?php echo $home_url; ?>#contact">CONTACT</a></li>
        </ul>
      </nav>
      <button class="hamburger" id="js-hamburger">
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

<?php get_header();?>
  <main class="content">

    <!-- mv -->
    <div class="mv">
      <div class="mv-container">
        <div class="thin-border"></div>
        <div class="bold-border">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main.svg" alt="main">
        </div>
      </div>
    </div>
    <!-- /mv -->

    <!-- about -->
    <section class="about-section" id="about">
      <div class="container">
        <div class="title">
          <h2 class="title-name">ABOUT</h2>
          <hr>
        </div>
        <div class="about-body">
          <h3 class="concept">Shape one's thought</h3>
          <p>「デザイン」は人の想いを具現化し、伝えるためのもの。<br>
            私のデザインを通して皆様の想いが届き、人と人が繋がる、<br class="pc-only">
            その橋渡しができればと考えています。</p>
          <div class="profile-body">
            <h6 class="name">Misaki Abe</h6>
            <p>
              神奈川県在住。<br>
              大学卒業後、都内のDX推進会社にエンジニアとして就職。<br>
              3年半在席し、現在はWebデザイナーへジョブチェンジのためオンラインスクールのWebデザインコースを受講し週40時間ほど勉強中。
            </p>
            <p class="en-text">
              I live in Kanagawa prefecture.<br>
              After graduating from university, I've worked as an engineer at DX promotion company in Tokyo.<br>
              After working for 3.5 years, I've been taking a web design course at an online school and studying about 40 hours a week to change my job to a web designer.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /about -->

    <!-- skill -->
    <section class="skill-section" id="skill">
      <div class="container">
        <div class="title">
          <h2 class="title-name">SKILL</h2>
        </div>
        <div class="skill-list">
          <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'SKILL',
              'post_per_page' => -1,
            );
            $posts = get_posts($args);
          ?>
          <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="skill-item">
              <div class="skill-body">
                <div class="skill-img">
                  <div class="skill-icon"><?php the_post_thumbnail(); ?></div>
                  <div class="skill-name"><?php the_title(); ?></div>
                </div>
                <div class="skill-text"><?php the_content(); ?></div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <!-- /skill -->

    <!-- works -->
    <section class="works-section" id="works">
      <div class="container">
        <div class="title">
          <h2 class="title-name">WORKS</h2>
          <hr>
        </div>
        <div class="works-list">
          <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'WORKS',
              'post_per_page' => -1,
            );
            $posts = get_posts($args);
          ?>
          <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <a class="works-item" href="<?php echo get_permalink(); ?>">
              <div class="works-img"><img src="<?php echo post_custom('thumbnail-path'); ?>" /></div>
              <p class="works-name"><?php the_title(); ?></p>
            </a>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <!-- /works -->

    <!-- contact -->
    <section class="contact-section" id="contact">
      <div class="container">
        <div class="title">
          <h2 class="title-name">CONTACT</h2>
          <hr>
        </div>
        <div class="contact-list">
          <p class="lead">
            お問い合わせは、<br class="sp-only">メールにてお願いいたします。
          </p>
          <span class="en-text">mskab033@gmail.com</span>
        </div>
      </div>
    </section>
    <!-- /contact -->
    <div class="page-top" id="js-page-top">
      <span class="material-icons-outlined">expand_less</span>
    </div>
  </main>
<?php get_footer(); ?>

<?php get_header();?>
  <main class="content">

    <!-- mv -->
    <div class="mv">
      <div class="mv__inner">
        <div class="mv__thin-border"></div>
        <div class="mv__bold-border mv__text">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main.svg" alt="main">
        </div>
      </div>
    </div>
    <!-- /mv -->

    <!-- about -->
    <section class="about" id="about">
      <div class="about__inner animation-fadein">
        <div class="about__heading">
          <h2 class="about__heading-text">ABOUT</h2>
        </div>
        <div class="about__container">
          <h3 class="about__concept">
            <span>Shape </span><br class="sp-only"><span>one's thought</span></h3>
          <p>「デザイン」は人の想いを具現化し、伝えるためのもの。<br>
            私のデザインを通して皆様の想いが届き、人と人が繋がる、<br class="pc-only">
            その橋渡しができればと考えています。
          </p>
          <h6 class="about__name">Misaki Abe</h6>
          <p class="about__profile">
            神奈川県在住。<br>
            大学卒業後、都内のDX推進会社にエンジニアとして就職。<br>
            3年半在席し、WebデザイナーへジョブチェンジのためオンラインスクールのWebデザインコースを受講。<br>
            卒業後の現在もスキルアップのため週40時間ほど勉強中。
          </p>
          <p class="about__en-profile en-text">
            I live in Kanagawa prefecture.<br>
            After graduating from university, I've worked as an engineer at DX promotion company in Tokyo.<br>
            After working there for 3.5 years, I took a web design course at an online school for 1.5 months to change my job to web designer.<br>
            After graduation, I've been studying 40 hours every week to improve my skills.
          </p>
        </div>
      </div>
    </section>
    <!-- /about -->

    <!-- skill -->
    <section class="skill" id="skill">
      <div class="skill__inner">
        <div class="skill__heading animation-fadein">
          <h2>SKILL</h2>
        </div>
        <div class="skill__container">
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
            <div class="skill__item animation-fadein">
              <div class="skill__body">
                <div class="skill__img">
                  <div class="skill__icon"><?php the_post_thumbnail(); ?></div>
                  <div class="skill__name"><?php the_title(); ?></div>
                </div>
                <div class="skill__text"><?php the_content(); ?></div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <!-- /skill -->

    <!-- works -->
    <section class="works" id="works">
      <div class="works__inner">
        <div class="works__heading animation-fadein">
          <h2>WORKS</h2>
        </div>
        <div class="works__container">
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
            <a class="works__item animation-fadein" href="<?php echo get_permalink(); ?>">
              <div class="works__img"><img src="<?php echo post_custom('thumbnail-path'); ?>" /></div>
              <p class="works__name"><?php the_title(); ?></p>
            </a>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <!-- /works -->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="contact__inner animation-fadein">
        <div class="contact__heading">
          <h2 class="contact__heading-text">CONTACT</h2>
        </div>
        <div class="contact__container">
          <p class="contact__email">mskab033@gmail.com</p>
        </div>
      </div>
    </section>
    <!-- /contact -->
    <div class="page-top" id="js-page-top">
      <span class="material-icons-outlined">expand_less</span>
    </div>
  </main>
<?php get_footer(); ?>

<?php get_header();?>
  <main class="content">
    <article class="article">
      <div class="article__inner">
        <div class="article__container">
          <?php the_post_thumbnail(); ?>
          <div class="article__title"><?php the_title(); ?></div>
          <div class="article__body">
            <div>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </article>
    <div class="page-top works__page-top" id="js-page-top">
      <span class="material-icons-outlined">expand_less</span>
    </div>
  </main>
<?php get_footer(); ?>

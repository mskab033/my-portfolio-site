<?php get_header();?>
  <main class="content">
    <article class="article">
      <div class="article-container">
        <div class="article-item">
          <?php the_post_thumbnail(); ?>
          <div class="article-title"><?php the_title(); ?></div>
          <div class="article-body">
            <div>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </article>
    <div class="page-top works-page-top" id="js-page-top">
      <span class="material-icons-outlined">expand_less</span>
    </div>
  </main>
<?php get_footer(); ?>

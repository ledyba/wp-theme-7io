<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Scrappy
 * @since Scrappy 1.3
 */

get_header(); ?>

    <section id="primary" class="site-content">
      <div id="content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'scrappy' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <hr />
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'search' ); ?>

        <?php endwhile; ?>

        <?php scrappy_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'scrappy' ); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'scrappy' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->

      <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
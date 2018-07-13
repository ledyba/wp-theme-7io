<?php
/**
 * @package Scrappy
 * @since Scrappy 1.3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <div class="entry-meta">
      <div class="post-date">
                                <?php the_time('Y'); ?>&nbsp;<br>
        <?php the_time('m/d'); ?>
      </div>
      <?php edit_post_link( __( 'Edit', 'scrappy' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-meta -->
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="media-posted-on">
      <?php scrappy_posted_on(); ?>
      <?php edit_post_link( __( 'Edit', 'scrappy' ), '<span class="sep"> | </span><span class="media-edit-link">', '</span>' ); ?>
    </div>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'scrappy' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php
      /* translators: used between list items, there is a space after the comma */
      $category_list = get_the_category_list( __( ', ', 'scrappy' ) );

      /* translators: used between list items, there is a space after the comma */
      $tag_list = get_the_tag_list( '', ', ' );

      if ( ! scrappy_categorized_blog() ) {
        // This blog only has 1 category so we just need to worry about tags in the meta text
        if ( '' != $tag_list ) {
          $meta_text = '<span class="tag-links">' . __( 'Tags: %2$s', 'scrappy' ) . '</span>';
        }

      } else {
        // But this blog has loads of categories so we should probably display them here
        if ( '' != $tag_list ) {
          $meta_text = '<span class="cat-links">' . __( 'Categories: %1$s', 'scrappy' ) . '</span>';
          $meta_text .= '<span class="tag-links">' . __( 'Tags: %2$s', 'scrappy' ) . '</span>';
        } else {
          $meta_text = '<span class="cat-links">' . __( 'Categories: %1$s', 'scrappy' ) . '</span>';
        }

      } // end check for categories on this blog

      printf(
        $meta_text,
        $category_list,
        $tag_list
      );
    ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->

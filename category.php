<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

      <div class="row">

        <div class="col-sm-12 blog-main">
<!--<h2 style="color:red">*Category pages are not yet functional*</h2>-->
          <h1 class="category-archive-title"><?php printf( __( 'Category Archive For: "%s"', 'bootstrapcanvaswp' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
            <p class="category-archive-description">Content that is listed here has been tagged with the category <?php printf( __( '"%s"', 'bootstrapcanvaswp' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?> </p>
		  <hr />
        
            <?php get_template_part('inc', 'categoryloop' ) ; ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->
      
	<?php get_footer(); ?>


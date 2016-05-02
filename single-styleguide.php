<?php
/**
 * Template for displaying all single posts in custom post type, Mockup
 * Single Post Template: Standards Post
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>
    <div class="styleguide-post">
      <div class="row">

        <div class="col-sm-12 blog-main">

          <?php get_template_part( 'loop', 'single' ); ?>
            
            <p>this is a new standards post</p>

        </div><!-- /.blog-main -->

        <!--<?php// get_sidebar(); ?>-->

      </div><!-- /.row -->
    </div>  
	<?php get_footer(); ?>
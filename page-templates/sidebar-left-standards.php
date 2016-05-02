<?php
/*
Template Name: Sidebar Left Standards
*/
?><?php get_header(); ?>
<div class="styleguide-page no-meta">
    

    <div class="row">

        <?php if ( is_rtl() ) : ?>
        <div class="col-sm-8 blog-main-left">
        <?php else : ?>
        <div class="col-sm-8 blog-main-right">
        <?php endif; ?>
            
            

          <?php get_template_part( 'loop', 'page' ); ?>
            
            <?php if (is_page (886)) {
                get_template_part( 'partials/styleguide', 'formelements' ); ?>
                <?php } elseif (is_page (892)) {
                get_template_part( 'partials/styleguide', 'lists' ); ?>
                <?php } elseif (is_page (888)) {
                get_template_part( 'partials/styleguide', 'navigation' ); ?>
                <?php } elseif (is_page (890)) {
                get_template_part( 'partials/styleguide', 'tables' ); ?>
                <?php } elseif (is_page (884)) {
                get_template_part( 'partials/styleguide', 'typography' ); ?>
                <?php } else {
                get_template_part( 'partials/styleguide', 'default' ); ?>
            <?php } ?>
                
            
            <?php get_sidebar(); ?> 
            
           
            
            
        </div><!-- /.blog-main -->

        

      </div><!-- /.row -->
        
        
       
    </div> <!-- /.styleguide --> 
</div>
	<?php get_footer(); ?>






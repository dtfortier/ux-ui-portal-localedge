<?php
/**
 * Template Name: Standards, Tables, Full-width Page Template, No Sidebar
 *
 * Description: Bootstrap Canvas WP loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

<div class="styleguide-page no-meta">
  <div class="row">

    <div class="col-sm-12 blog-main">
        
        <h2 class="heading">UI Standards</h2>

      <?php get_template_part( 'loop', 'page' ); ?>
        
            <?php
                if (is_page (884)) {
                get_template_part( 'partials/ui-standards', 'typography' ); ?>
                <?php } elseif (is_page (886)) {
                get_template_part( 'partials/ui-standards', 'formelements' ); ?>
                <?php } elseif (is_page (888)) {
                get_template_part( 'partials/ui-standards', 'navigation' ); ?>
                <?php } elseif (is_page (890)) {
                get_template_part( 'partials/ui-standards', 'tables' ); ?>
                <?php } elseif (is_page (892)) {
                get_template_part( 'partials/ui-standards', 'lists' ); ?>
                <?php } elseif (is_page (952)) {
                get_template_part( 'partials/ui-standards', 'icons' ); ?>
                <?php } elseif (is_page (973)) {
                get_template_part( 'partials/ui-standards', 'feedback' ); ?>
                <?php } elseif (is_page (990)) {
                get_template_part( 'partials/ui-standards', 'layout' ); ?>
                <?php } elseif (is_page (3439)) {
                get_template_part( 'partials/ui-standards', 'statsdata' ); ?>
                <?php } elseif (is_page (1889)) {
                get_template_part( 'partials/ui-standards', 'suggestionbox' ); ?> 
                <?php } else {
                get_template_part( 'partials/ui-standards', 'default' ); ?>
            <?php } ?>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->
</div>

	<?php get_footer(); ?>
    
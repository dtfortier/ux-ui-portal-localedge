<?php 
 $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; 
 $date_format = get_option( 'date_format' ); 
 $time_format = get_option('time_format'); ?>

<?php if( have_posts() ) : ?>
<div class="category-posts">	
    <table width="100%" border="2px;" class="custom">
        <tr>
            <td class="head">Mockup Title</td>
            <td class="head">Post Date</td>
        </tr>
    <?php while ( have_posts() ) : the_post(); ?>
        <tr> 
            <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td>
            <td><?php the_time( $date_format ) ?>, <?php the_time( $time_format ) ?></td>
        </tr>

	<?php endwhile; ?>  
    </table>
</div>

<?php if (function_exists(custom_pagination)) {
        custom_pagination($loop->max_num_pages,"",$page);
      }
    ?>

  <?php wp_reset_postdata(); ?>


<?php else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>




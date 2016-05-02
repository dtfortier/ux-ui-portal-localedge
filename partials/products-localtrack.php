                <?php 
                $args = array(
                    'post_type' => 'mockup',
                    'posts_per_page' => 20,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'cat' => 39,
                );
                $loop = new WP_Query( $args );   
                $date_format = get_option( 'date_format' ); ?>
            
                
   
               
                <?php if( have_posts() ) : ?>
                <table width="100%" border="2px;" class="custom">
                <tr>
                <td class="head">Status</td>      
                <td class="head">Version #</td>    
                <td class="head">Mockup Title</td>
                <td class="head">Category Type</td>    
                <td class="head">Post Date</td>
                </tr>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <tr>
                    <?php if (get_field('status') == 'alpha') { ?>
	                   <td style="color: #60ADFF">
                           <i class="fa fa-circle-o"></i> <?php the_field('status'); ?></td>
                    <?php } else if (get_field('status') == 'beta') { ?>
	                   <td style="color: #F5B85A;">
                           <i class="fa fa-circle"></i> <?php the_field('status'); ?></td>
                    <?php } else if (get_field('status') == 'releasecandidate') { ?>
                        <td style="color: #64C584">
                            <i class="fa fa-check-circle"></i> <?php the_field('status'); ?></td>
                    <?php } else if (get_field('status') == 'closed') { ?>
                        <td style="color: #FF4444;">
                            <i class="fa fa-times-circle"></i> <?php the_field('status'); ?></td>
                    <?php } else { ?>
                        <td style="color: yellow"><?php the_field('status'); ?></td>
                    <?php } ?>
                    
                    <td><?php the_field('version'); ?></td>
                    <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td>
                    <td><?php the_field('category_type'); ?></td>       
                    <td><?php the_time( $date_format ) ?></td>
                </tr>
                <?php endwhile; ?>
                </table>

                <?php
                  if (function_exists(custom_pagination)) {
                    custom_pagination($loop->max_num_pages,"",$paged);
                  }
                ?>

              <?php wp_reset_postdata(); ?>

                    
                <?php else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
              
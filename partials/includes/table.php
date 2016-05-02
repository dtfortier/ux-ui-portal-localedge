                <?php if( have_posts() ) : ?>
                <table width="100%" border="2px;" class="custom">
                <tr>
                <td class="head">Status 
                    <i class="fa fa-question-circle click" data-container="body" data-html="true" data-toggle="popover" data-placement="right" 
                       data-content="<li><p class='alpha'> Alpha </p>: Preliminary work</li>
                                     <li><p class='beta'> Beta </p>: Waiting for Product Team approval</li>
                                     <li><p class='releasecandidate'> Release Candidate </p>: Final Version, meant for devs and QA</li>
                                     <li><p class='closed'> Closed </p>: Mockups no longer in use</li>"></i>
                </td>      
                <td class="head">Version</td>    
                <td class="head">Mockup Title</td>
                <td class="head">Category Type
                    <i class="fa fa-question-circle click" data-container="body" data-toggle="popover" data-placement="right" data-content="Mockup element category"></i>
                </td>    
                <td class="head">Post Date</td>
                <td class="head">Latest Revision</td>    
                </tr>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <tr>
                    <?php if (get_field('status') == 'alpha') { ?>
	                   <td class="alpha">
                           <i class="fa fa-circle-o"></i> <?php the_field('status'); ?></td>
                    <?php } else if (get_field('status') == 'beta') { ?>
	                   <td class="beta">
                           <i class="fa fa-circle"></i> <?php the_field('status'); ?></td>
                    <?php } else if (get_field('status') == 'releasecandidate') { ?>
                        <td class="releasecandidate">
                            <i class="fa fa-check-circle"></i> <?php the_field('status'); ?></td>
                    <?php } else if (get_field('status') == 'closed') { ?>
                        <td class="closed">
                            <i class="fa fa-times-circle"></i> <?php the_field('status'); ?></td>
                    <?php } else { ?>
                        <td class="default"><?php the_field('status'); ?></td>
                    <?php } ?>
                    
                    <td><?php the_field('version'); ?></td>
                    <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td>
                    <td class="italic"><?php the_field('category_type'); ?></td>       
                    <td><?php the_time( $date_format ) ?></td>
                    <td class="revised"><?php the_modified_date( $date_format ) ?></td>
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



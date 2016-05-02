                <?php 
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'mockup',
                    'posts_per_page' => 20,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'cat' => 9,
                );
                $loop = new WP_Query( $args );   
                $date_format = get_option( 'date_format' ); 
                $time_format = get_option('time_format'); ?>
            
                
   
               
               <?php include 'includes/table.php'; ?>
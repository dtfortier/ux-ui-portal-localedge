                <?php 
                $args = array(
                    'post_type' => 'mockup',
                    'posts_per_page' => 20,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'cat' => 89,
                );
                $loop = new WP_Query( $args );   
                $date_format = get_option( 'date_format' ); ?>
            
              <?php include 'includes/table.php'; ?>
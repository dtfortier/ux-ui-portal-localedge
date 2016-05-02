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
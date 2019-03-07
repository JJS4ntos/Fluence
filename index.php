<?php status_header(200); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body>
    <?php
      if( !empty($_GET["elementor-preview"]) && !empty($_GET["ver"]) ) {
        echo the_content();
      }else{
        echo '<div id="app"></div>';
      }
    ?>
    <?php wp_footer(); ?>
  </body>
</html>

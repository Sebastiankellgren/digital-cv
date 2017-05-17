<!DOCTYPE html>
<html>
<head>
    <title><?php echo $blog_title = get_bloginfo(); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="wp-content/themes/<?php echo wp_get_theme(); ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="wp-content/themes/<?php echo wp_get_theme(); ?>/css/responsive.css" />
</head>
<body>
    
    <!-- Include dynamic sidebars  -->
    <?php dynamic_sidebar("colors_block"); ?>
    <?php dynamic_sidebar("images_block"); ?>
    
    <!-- Include all blocks -->
    <?php include 'blocks/top.php' ?>
    
    <?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    
    <div class="wrapper">  
          
        <?php include 'blocks/interests.php' ?>
        
        <div class="image-breaker"><div class="dots"></div></div>
        
        <?php include 'blocks/education.php' ?>
        
        <?php include 'blocks/knowledge.php' ?>
        
        <div class="image-breaker-2"><div class="dots"></div></div>
        
        <?php include 'blocks/employment.php' ?>
        
    </div>

    <?php include 'blocks/footer.php' ?>

    <!-- Include all scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="wp-content/themes/<?php echo wp_get_theme(); ?>/js/main.js"></script>
    <script src="wp-content/themes/<?php echo wp_get_theme(); ?>/js/jquery.inview.js"></script>
</body>
</html>
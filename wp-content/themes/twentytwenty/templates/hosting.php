<?php
/**
 * Template Name: Trang hosting (anh thi)
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */
get_template_part( 'template-parts/entry-header' );
?>

<body>
    <main id="site-content" role="main">
        <?php 

            include('title-web-hosting.php');
                    
            include('hosting-intro.php');

            include('price.php');

            include('price-hidden.php');

            include('reason.php');

            include('library.php');

            include('add-ons.php');

            include('hosting-wordpress.php');
        
            include('about-network-solutions.php');
        
        ?>

    </main>

</body>
<?php
get_template_part( 'template-parts/entry-footer' );
?>
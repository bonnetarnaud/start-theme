<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage start_theme
 * @since Start Theme 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <?php if (have_posts()) : ?>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <?php while (have_posts()) : the_post(); ?>
                    <?php the_title(); ?>
                        <?php the_content() ?>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php wp_footer(); ?>
  </body>
</html>
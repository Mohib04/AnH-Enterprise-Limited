<?php include_once('header.php') ?>
<!-- slider section -->


<!-- end slider section -->


<?php while(have_posts()): the_post(); ?>
<?php get_template_part( 'formats/content', get_post_format() ); ?>
<?php endwhile; ?>


<?php include_once('footer.php') ?>
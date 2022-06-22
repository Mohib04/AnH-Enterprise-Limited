<?php get_header() ?>
<?php
echo "I am called";
function cmb2_output_file_list($file_list_meta_id, $img_size = 'small'){
        echo '<div class="row">';
                $files = get_post_meta( get_the_ID(), $file_list_meta_id, 1);
                // Loop through them and output an image
                foreach ( (array) $files as $attachment_id => $attachment_url ) {
                echo ' <div class="col-4">';
                    echo wp_get_attachment_image( $attachment_id, $img_size );
                    echo '</div>';
                }
        echo '</div>';
    }
?>
<hr>
<div class="container">
    <h2 class="card-title"><?php the_title();?></h2>
    <p class="card-text">
        <?php the_content(); ?>
    </p>
    <?php cmb2_output_file_list( 'srd_image_gallery', 'small' ); ?>
</div>

<?php get_footer() ?>
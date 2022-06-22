<?php get_header(); 

function cmb2_output_file_list( $file_list_meta_id, $img_size = 'medium' ) {

	// Get the list of files
	$files = get_post_meta( get_the_ID(), $file_list_meta_id, 1 );

	echo '<div class="file-list-wrap">';
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {
		echo '<div class="file-list-image">';
		echo wp_get_attachment_image( $attachment_id, $img_size );
		echo '</div>';
	}
	echo '</div>';
}
?>

<?php while(have_posts()): the_post(); ?>


<div class="container mb-3">
    <div class="card m-auto" style="width: 85%">
        <div class="card-body">
            <iframe width="100%" height="400" src="<?php echo get_post_meta( get_the_id(), 'url', true ); ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Project Name:</strong> <?php echo get_post_meta( get_the_id(), 'project_name', true ); ?>
            </li>
            <li class="list-group-item"><strong>Company Name:</strong>
                <?php echo get_post_meta( get_the_id(), 'company_name', true ); ?> </li>
            <li class="list-group-item"><strong>Manufacturer:</strong>
                <?php echo get_post_meta( get_the_id(), 'manufacturer', true ); ?>
            </li>
            <li class="list-group-item"><strong>Origin:</strong>
                <?php echo get_post_meta( get_the_id(), 'origin', true ); ?>
            </li>
            <li class="list-group-item"><strong>Description:</strong>
                <?php echo get_post_meta( get_the_id(), 'description', true ); ?>
            </li>
        </ul>

        <div>
            <?php cmb2_output_file_list( 'wiki_test_file_list', 'small' ); ?>
        </div>

    </div>
</div>


<?php endwhile; ?> <?php get_footer(); ?>
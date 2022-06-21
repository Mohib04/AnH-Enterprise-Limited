<?php
/*
Template Name: Project
*/
get_header();
?>




<?php
    $project = new WP_Query(array(
        'post_type' => 'anh-project'
    ));

    while($project->have_posts()): $project->the_post(); ?>
<!-- <div class="card">
    
    <div class="card-body">
        <h4 class="card-title"><strong>Project Name:</strong>
            
        </h4>
        <h4 class="card-title"><strong>Company Name:</strong>
           
        </h4>
        <h4 class="card-title"><strong>Manufacturer:</strong>
            
        </h4>
        <h4 class="card-title"><strong>Origin:</strong>
            
        </h4>
        <p class="card-title"><strong>Description:</strong>
            
        </p>
    </div>
</div> -->

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
        </ul>
    </div>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php get_footer(); ?>
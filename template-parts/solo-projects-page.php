<?php
/**
 * The template part for displaying the my story section on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container-fluid solo-projects-container">

	<?php if (get_field('solo_projects_heading')){  ?>
		    <h2 class="light-blue-text section-top-padding bottom-padding"> <?php the_field('solo_projects_heading')?> </h2>
	<?php } ?> 


	<div class="solo-projects-cards-row">

	<?php

	$query_solo = array(
			'category_name' => 'solo',
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'rand'
		);

	$result = new WP_Query( $query_solo );

	while ( $result->have_posts() ) : $result->the_post(); ?>
		

				<?php if (get_field('image')){ 
				    echo '<img class="card solo-card" src="'. get_field('image') . '"/>' ?> 
				<?php } ?> 

		

		<!-- // End the loop -->
		<?php endwhile;
		wp_reset_query(); ?>
	</div>

	<?php if (get_field('solo_projects_button_text')){  ?>
		    <button class="button-light-blue centered-button button-bottom-margin"><?php the_field('solo_projects_button_text')?></button>
	<?php } ?> 
	
</div>
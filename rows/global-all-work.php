<div class="row">
	<div class="row_heading">
		<h2><?php the_sub_field('title'); ?></h2>

		<ul class="filter cfx">
			<li data-filter="all" class="active">All</li>
<?php
		$terms = get_terms( array( 
		    'taxonomy' => 'case_studies',
		    'hide_empty' => false,
		    'parent'   => 0
		) );

		$taxonomies = get_categories($terms); 

		foreach($taxonomies as $taxonomy){
			$terms = get_terms($taxonomy);
				foreach ( $terms as $term) {
					echo '<li data-filter="'.$term->slug.'">'.$term->name.'</li>';
				}
		}
?>
		</ul>

	</div>

	<div class="content_container">
		<div class="all_work equal_height filtr-container">
			


<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
        'post_type'   => 'case_studies',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DEC'
    );

	$the_query = new WP_Query( $args ); 
?>

<?php 
if ( $the_query->have_posts() ) {
?>

<?php
	while ( $the_query->have_posts() ) : $the_query->the_post();

		$img = get_sub_field('preview_image');
	    $copy = get_sub_field('preview_copy');

		$categories = wp_get_post_categories( get_the_ID() );
		$countItems = count($categories);
		$i = 0;
		$catList = '';
		$slugList = '';
		foreach($categories as $c){
			$cat = get_category( $c );
			$cat_id = get_cat_ID( $cat->name );

			//limit the number of categories show to 4 (the height of the element needs to be set to allow the filter to work)
			if($i <= 3){
				$catList .= '<a href="'.get_category_link($cat_id).'" class="cat_link">'.$cat->name.'</a>';
			}

			if(++$i === $countItems){
				$slugList .= $cat->slug;
			}else{
				$slugList .= $cat->slug.', ';
			}
		}

?>

			<div  class="work_item filtr-item" data-category="<?php echo $slugList; ?>">
				<div class="container">
					<div class="content">
						<a href="<?php the_permalink(); ?>" class="link_container">
							<div class="image_wrapper">
								<img src="<?php the_field('preview_image'); ?>" alt="<?php the_title(); ?>" class="base-img">
								<img src="<?php the_field('preview_image'); ?>" data-gradient-map="#0000FF, #FFFFFF" alt="<?php the_title(); ?>" class="duotone">
							</div>

							<div class="view_link">
								<div class="label">View</div>
							</div>
						</a>
						<div class="copy">
							<h3><?php the_title(); ?></h3>
							<div class="case_study_cats">
								<?php echo $catList; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			

<?php
	endwhile;
}
?>

		</div>
	</div>
</div>

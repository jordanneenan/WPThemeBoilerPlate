<?php
if( have_rows('slides') ):
	// $count = count(get_field('slides'));
	// $numRowsClass = 'multiple';
	// if($count == 1){
	// 	$numRowsClass = 'single';
	// }
?>
<div class="row case_study_carousel_row">
	<div class="row_heading">
		<h2>Featured<br>case studies</h2>
	</div>
	<div class="case_studies_carousel <?php //echo $numRowsClass; ?>">
<?php
    while ( have_rows('slides') ) : the_row();

    	$post_object = get_sub_field('post');
		$post = $post_object;
		setup_postdata( $post );
?>
				<div class="case_study_slide <?php the_field('theme_colour'); ?>">
					<div class="inner cfx">

						<div class="image_wrapper">
							<div class="image" style="background: url('<?php the_field('preview_image'); ?>') center center no-repeat;"></div>
						</div>

						<div class="copy v-align">
							<div class="content">
								<h3><?php the_title(); ?></h3>
								<a href="<?php the_permalink(); ?>" class="button transparent transparent-dark">View</a>
							</div>
						</div>

						 <ul class="case_study_cats">
  <?php
    //get all the categories the post belongs to
    $categories = wp_get_post_categories( get_the_ID() );
    //loop through them
    foreach($categories as $c){
      $cat = get_category( $c );
      //get the name of the category
      $cat_id = get_cat_ID( $cat->name );
      //make a list item containing a link to the category
      echo '<li><a href="'.get_category_link($cat_id).'">'.$cat->name.'</a></li>';
    }
  ?>
						</ul>	
						
					</div>
				</div>
<?php
		wp_reset_postdata();
    endwhile;
?>
	</div>
</div>
<?php
endif;
?>

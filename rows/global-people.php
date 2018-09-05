<div class="row people">

	<div class="people_container">
<?php
if( have_rows('people') ):
	$i = 1;
    while ( have_rows('people') ) : the_row();
?>

		<div class="person" id="person-<?php echo $i; ?>" data-person-number="<?php echo $i; ?>">
			<a href="#">
				<img src="<?php the_sub_field('headshot'); ?>" alt="<?php the_sub_field('name'); ?>" class="base-img">
				<img src="<?php the_sub_field('headshot'); ?>" data-gradient-map="#0000FF, #FFFFFF" alt="<?php the_sub_field('name'); ?>" class="duotone">

				<div class="bio_link">
					<div class="label">Bio</div>
				</div>
			</a>

			<div class="info">
				<div class="headshot_alternate">
					<div class="img" style="background: url(<?php the_sub_field('headshot_alternate'); ?>) center center no-repeat;"></div>
				</div>
				<div class="name"><?php the_sub_field('name'); ?></div>
				<div class="bio"><?php the_sub_field('bio'); ?></div>
				<div class="position"><?php the_sub_field('position'); ?></div>
			</div>
		</div>

<?php
		$i++;
    endwhile;
endif;
?>	

	</div>	
</div>
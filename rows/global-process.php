<div class="row process">
	<div class="content_container">

		<div class="image_copy_row not_full">
			<div class="wrapper cfx">
		
<?php
if( have_rows('processes') ):
	$i = 1;
    while ( have_rows('processes') ) : the_row();
    	if($i % 2){
    		$sideMod = 'normal';
    	}else{
    		$sideMod = 'alternate';
    	}
?>
				<div class="image_copy cfx <?php echo $sideMod; ?>">
					<div class="image_wrapper">
						<div class="image">
							<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
						</div>
					</div>

					<div class="copy v-align">
						<div class="content">
							<div class="ic_title">
								<h3><?php the_sub_field('title'); ?><div class="count"><?php echo '0'.$i; ?></div></h3>
							</div>
							<?php the_sub_field('copy'); ?>
							
						</div>
					</div>
				</div>
<?php
		$i++;
    endwhile;
endif;
?>
			</div>
		</div>

	</div>
</div>
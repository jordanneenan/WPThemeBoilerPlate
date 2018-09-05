<div class="row page_intro">
	<div class="content_container cfx">
		
		<div class="left">
			<div class="copy">
				<?php the_sub_field('intro_copy'); ?>
			</div>
		</div>

		<div class="right">
			<ul class="anchor_links">
<?php
	if( have_rows('anchor_navigation') ):
		while ( have_rows('anchor_navigation') ) : the_row();
?>

				<li><a href="<?php the_sub_field('anchor_id'); ?>"><?php the_sub_field('label'); ?></a></li>

<?php
		endwhile;
	endif;
?>				
			</ul>
		</div>

	</div>
</div>
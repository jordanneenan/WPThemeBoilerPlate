<?php
	$image = get_sub_field('image');
	$title = get_sub_field('title_override');

	if(empty($title)){
		$title = get_the_title();
	}
?>

<div class="row">
	<div class="page_banner">
		<div class="image">
			<div class="img" style="background: url(<?php echo $image; ?>) center center no-repeat;"></div>
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
</div>

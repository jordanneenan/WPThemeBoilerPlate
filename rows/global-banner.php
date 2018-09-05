<?php
	$image = get_sub_field('banner_image');
	$title = get_sub_field('banner_title');
	$copy = get_sub_field('banner_copy');
	$btnCopy = get_sub_field('button_copy');
	$btnLink = get_sub_field('button_link');
	$newTab = get_sub_field('new_tab');
	$bgColor = get_sub_field('background_color');
	$fullScreen = get_sub_field('full_screen_banner');

	$classes = '';
	$styles = '';
	$includeImage = '';

	if($image){
		$includeImage = 'style="background: url('.$image.') center center no-repeat;"';
	}

	if($bgColor){
		$styles = "background-color: ".$bgColor.";";
	}

	if($fullScreen){
		$classes .= "full_height ";
	}

	$target = "";

	if($newTab){
		$target = 'target="_blank"';
	}
?>

	<div class="row" style="<?php echo $styles; ?>">

		<!-- Banner settings - left_align will align the content left, full_height will set the banner to viewport height -->

		<div class="banner left_align <?php echo $classes; ?>" <?php echo $includeImage; ?>>

			<div class="banner_container">
				<div class="banner_align">
					<div class="banner_content">
						<?php if($title){ ?>
							<h1><?php echo $title; ?></h1>
						<?php } ?>
					</div>
				</div>

				<div class="copy">
					<?php if($copy){ ?>
						<p><?php echo $copy; ?></p>
					<?php } ?>

					<?php if($btnCopy){ ?>
						<a href="<?php echo $btnLink; ?>" class="button" <?php echo $target; ?>><?php echo $btnCopy; ?></a>
					<?php } ?>
				</div>
		  	</div>

		  	<a href="#" class="arrow_icon"><img src="<?php echo $GLOBALS['pathIcon']; ?>icon-arrow-down.svg" alt="Scroll down"></a>

		</div>

	</div>

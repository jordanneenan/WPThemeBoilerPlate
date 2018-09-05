<?php
/**
 * Template Name: Dynamic Template
 */

 get_header();

if (have_posts()) : while (have_posts()) : the_post();

	if( have_rows('rows') ):
	    while ( have_rows('rows') ) : the_row();

	        if( get_row_layout() == 'case_study_carousel' ):
	        	get_template_part('rows/global', 'case-study-carousel');

	        elseif( get_row_layout() == 'banner' ):
	        	get_template_part('rows/global', 'banner');

        	elseif( get_row_layout() == 'page_banner' ):
	        	get_template_part('rows/global', 'page-banner');

        	elseif( get_row_layout() == 'row_title' ):
	        	get_template_part('rows/global', 'row-title');

        	elseif( get_row_layout() == 'page_intro' ):
	        	get_template_part('rows/global', 'page-intro');

        	elseif( get_row_layout() == 'anchor_row' ):
	        	get_template_part('rows/global', 'anchor-row');

        	elseif( get_row_layout() == 'all_work' ):
	        	get_template_part('rows/global', 'all-work');

	        elseif( get_row_layout() == 'one_col_text' ):
	        	get_template_part('rows/global', 'simple-copy');

	        elseif( get_row_layout() == 'article' ):
	        	get_template_part('rows/global', 'article');

	        elseif( get_row_layout() == 'image_copy' ):
	        	get_template_part('rows/global', 'image-copy');

        	elseif( get_row_layout() == 'process_repeater' ):
	        	get_template_part('rows/global', 'process');

	        elseif( get_row_layout() == 'gravity_form' ):
	        	get_template_part('rows/global', 'form');

        	elseif( get_row_layout() == 'people' ):
	        	get_template_part('rows/global', 'people');

        	elseif( get_row_layout() == 'spacer' ):
	        	get_template_part('rows/global', 'spacing');

	        endif;

	    endwhile;
	endif;

endwhile; endif; // close the WordPress loop
?>








<?php get_footer(); ?>
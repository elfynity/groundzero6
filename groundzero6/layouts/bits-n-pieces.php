<?php
if( have_rows('flex_box') ): 
 while ( have_rows('flex_box') ) : the_row(); 
 
	$flexboxI  = new FlexBox(get_sub_field('flex_basis'), get_sub_field('gap'), get_sub_field('min_width'), get_sub_field('max_width'));
	$flexbox = $flexboxI->showValue();
	$flex_gap = $flexboxI->flexGap();
		
	endwhile; 
endif; 



if( have_rows('shape_divider') ): 
 while ( have_rows('shape_divider') ) : the_row(); 
		$background_color =  get_sub_field('background_color'); 
		$height = get_sub_field('height'); 
		
		$dividerValues = new SectionDividers();
		$divider = $dividerValues->divider($background_color, $height);
		
	endwhile; 
endif; 









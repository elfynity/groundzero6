	<?php	


	$left_column_width = get_sub_field('left_column_width');
	$right_column_width = 100 - $left_column_width;
	$column_min_width = get_sub_field('column_min_width'); 


		if( have_rows('left_column') ): 
		 while ( have_rows('left_column') ) : the_row(); 
				$wysiwyg =  get_sub_field('wysiwyg'); 
				
				
				if( have_rows('align') ): 
				 while ( have_rows('align') ) : the_row(); 
						$text_align =  get_sub_field('text_align'); 
						$align_self = get_sub_field('align_self'); 
					endwhile; 
				endif; 
				
				
				if( have_rows('image_container') ): 
				 while ( have_rows('image_container') ) : the_row(); 
						$image =  get_sub_field('image'); 
						$image_size = get_sub_field('image_size'); 
					endwhile; 
				endif; 
				
				if( have_rows('icon_container') ): 
				 while ( have_rows('icon_container') ) : the_row(); 
					$icon = '';
					$icon_size = '';
						if(get_sub_field('icon')) {
							$icon = get_sub_field('icon'); 
							$icon_size = get_sub_field('icon_size'); 
						} 
						
					endwhile; 
				endif; 
				
				
				$link = get_sub_field('link');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				endif; 
				
			endwhile; 
		endif; 
		
		
		if( have_rows('right_column') ): 
		 while ( have_rows('right_column') ) : the_row(); 
				$wysiwygr =  get_sub_field('wysiwyg'); 
				
				
				if( have_rows('align') ): 
				 while ( have_rows('align') ) : the_row(); 
						$text_alignr =  get_sub_field('text_align'); 
						$align_selfr = get_sub_field('align_self'); 
					endwhile; 
				endif; 
				
				
				if( have_rows('image_container') ): 
				 while ( have_rows('image_container') ) : the_row(); 
						$imager =  get_sub_field('image'); 
						$image_sizer = get_sub_field('image_size'); 
					endwhile; 
				endif; 
				
				if( have_rows('icon_container') ): 
				 while ( have_rows('icon_container') ) : the_row(); 
					$iconr = '';
					$icon_sizer = '';
						if(get_sub_field('icon')) {
							$iconr = get_sub_field('icon'); 
							$icon_sizer = get_sub_field('icon_size'); 
						} 
						
					endwhile; 
				endif; 
				
				
				$linkr = get_sub_field('link');
				if( $link ): 
					$link_urlr = $linkr['url'];
					$link_titler = $linkr['title'];
					$link_targetr = $linkr['target'] ? $linkr['target'] : '_self';
				endif; 
				
			endwhile; 
		endif; 		
		?>

	

	<div class="split-content-container <?php the_sub_field('classes'); ?>">

		<div class="<?php the_sub_field('wrapper'); ?>">
			<div class="split-content">	
				

						
					<div class="column" style="flex: 1 0 calc(<?php echo $left_column_width; ?>% - 10px); min-width:<?php echo $column_min_width; ?>px; text-align:<?php echo $text_align; ?>; align-self:<?php echo $align_self; ?>">
		
						
						
						<?php if($icon) { ?>
					
						<span style="font-size:<?php echo $icon_size; ?>px; height:<?php echo $icon_size; ?>px;" class="dashicons <?php echo $icon; ?>"></span>
						<?php } ?>

						<?php if($wysiwyg) { ?>
						<div class="editor">
							<?php echo $wysiwyg; ?>
						</div>
						<?php } ?>

						<?php if($image) { ?>
						<div class="image">		
							<?php echo wp_get_attachment_image( $image, $image_size); ?>
						</div>
						<?php } ?>
						
						<?php
						if($link) {
							$buttonLink = new buttonLink($link, '');
							echo $buttonLink->showButtonLink();	
						}
											
						?>

					</div><!--column-->
					
					
					<div class="column" style="flex: 1 0 calc(<?php echo $right_column_width; ?>% - 10px); min-width:<?php echo $column_min_width; ?>px; text-align:<?php echo $text_alignr; ?>; align-self:<?php echo $align_selfr; ?>">
		
						
						
						<?php if($iconr) { ?>
					
						<span style="font-size:<?php echo $icon_sizer; ?>px; height:<?php echo $icon_sizer; ?>px;" class="dashicons <?php echo $iconr; ?>"></span>
						<?php } ?>

						<?php if($wysiwygr) { ?>
						<div class="editor">
							<?php echo $wysiwygr; ?>
						</div>
						<?php } ?>

						<?php if($imager) { ?>
						<div class="image">		
							<?php echo wp_get_attachment_image( $imager, $image_sizer); ?>
						</div>
						<?php } ?>
						
						<?php
						if($linkr) {
							$buttonLinkr = new buttonLink($link, '');
							echo $buttonLinkr->showButtonLink();	
						}
											
						?>	

					</div><!--column-->						
			
				
	

			</div><!--split-content-->
			
		</div><!-- wrapper -->	
	</div><!-- solit-content-container-->

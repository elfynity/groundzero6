<?php
$scrollEffect = new ScrollEffect(get_sub_field('scroll_effect'));
include 'bits-n-pieces.php';	


$main_heading_title = get_sub_field('heading_h1'); 
$main_sub_heading = get_sub_field('sub_heading'); 
$main_editor = get_sub_field('editor'); 

?> 





<div class="container-main-content <?php the_sub_field('classes'); ?>" >
	<div class="<?php the_sub_field('wrapper'); ?>">

		<div class="main-content-inner<?php echo $scrollEffect->showValue(); ?>">
			
			<?php if(get_sub_field('show_title')) { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php } else { ?>
				<h1><?php echo $main_heading_title; ?></h1>
			<?php }	?>
			
			
			
			
			
			<h3><?php echo $main_sub_heading; ?></h3>
			<?php echo $main_editor; ?>
						
			<?php 
			$image = get_sub_field('image');
			echo wp_get_attachment_image( $image, 'full'); 
			?>
			
		</div><!--main-content-inner-->	
		

	</div><!-- wrapper -->

<?php echo $divider; ?>	
</div><!-- container-main-content -->



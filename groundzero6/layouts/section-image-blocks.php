<?php 
$scrollEffect = new ScrollEffect(get_sub_field('scroll_effect'));
include 'bits-n-pieces.php';	

$type_of_block = get_sub_field('type_of_block'); 
$icon_size = get_sub_field('icon_size');


if(get_sub_field('max_width')) {
	$max_width = get_sub_field('max_width').'px';
} else {
	$max_width = 'auto';
}


$blocks = get_sub_field('blocks');




?>



<div class="container-blocks <?php the_sub_field('classes'); ?>">
	<div class="<?php the_sub_field('wrapper'); ?>">
	
		<h2><?php echo get_sub_field('heading'); ?></h2>
		
		<div class="blocks" style="gap:<?php echo $flex_gap; ?>px;">
			<?php 
			
				if($blocks) {
			
					foreach($blocks as $block): 
						$block_media = '';
					?>
					
					<div class="block<?php echo $scrollEffect->showValue(); ?>" style="<?php echo $flexbox; ?>">
					
						
						
						<?php 
					
						if($type_of_block === 'none') {
							$block_media = '';
						
						} else if($type_of_block === 'image') {		
							
							
							if($block['image']) {
								$block_media = wp_get_attachment_image( $block['image'], get_sub_field('image_size'), false, array('style' => 'width: '. $max_width) );

							} 
							
						} else if($type_of_block === 'icon') {
							
							if($block['icon']) {
								$block_media = '<span style="font-size:'.$icon_size.'px; height:'.$icon_size.'px;" class="dashicons '.$block['icon'].' "></span>';
							}
							
						}
							
						
						
						if(!empty($block['link'])): ?>
							<a href="<?php echo $block['link']; ?>">
							
								<?php echo $block_media; ?>	
								<h5><?php echo $block['title']; ?></h5>
							</a>
							
							<?php else: ?>
							
								<?php echo $block_media; ?>	
								<h5><?php echo $block['title']; ?></h5>
						
						<?php endif; ?>
			
			
						
						<p><?php echo $block['content']; ?></p>
					</div><!-- block -->	
					<?php endforeach; 
				}?>

		</div><!--- blocks -->	
	</div><!-- width -->
</div><!-- container-blocks-->
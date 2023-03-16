<?php get_header(); ?>



<div id="page-content">


	<div id="page-sidebar">
		<?php  get_sidebar('category-pages'); ?>
	</div><!---page-sidebar-->

	
	
	

	<div id="page-right-content">
		<div class="page-wrapper">


		
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<script type="application/ld+json">
				{
					"@context": "https://schema.org",
					"@type": "NewsArticle",
					"mainEntityOfPage": {
						"@type": "WebPage",
						"@id": "<?php echo the_permalink(); ?>"
					},
					"headline": "<?php echo the_title(); ?>",
					"image": [
						"<?php the_post_thumbnail_url('thumbnail');?>"
					 ],
					"datePublished": "<?php echo $time = the_time('c'); ?>",
					"dateModified": "<?php the_modified_date('c'); ?>",
					"author": {
						"@type": "Person",
						"name": "<?php the_author(); ?>"
					},
					 "publisher": {
						"@type": "Organization",
						"name": "<?php echo get_bloginfo('name'); ?>",
						"logo": {
							"@type": "ImageObject",
							"url": "<?php the_post_thumbnail_url('full');?>",
							"image": "<?php echo $img_src; ?>"
						}
					}
				}
				</script>

		
					
				<div class="breadcrumbs"><?php get_breadcrumb(); ?></div>

		
					
					
				<h1 class="entry-title blog-title"><?php the_title(); ?> blah</h1>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div class="blog-meta">
						<?php the_time('j F Y, l'); ?> | 
						Written by: <?php the_author(); ?>   <br />
						<?php the_tags('', ', ', ''); ?>
					</div><!---blog-meta-->
					<div class="clear30"></div>
					
					
					
					<?php $weathers = get_post_meta($post->ID, 'Weather', false); 
						foreach($weathers as $weather) {
							echo $weather;
						}
					
					?>
					<?php echo get_post_meta($post->ID, 'seo_title', true); ?>
					
					
					
					<?php /* <img src="<?php the_post_thumbnail_url('full');?>" /> */ ?>
					
					<?php the_content(); ?>
					
					
					<?php wp_link_pages( ); ?>
	
				</div><!---post-->

				<?php comments_template(); ?>
			<?php endwhile; endif; ?>

			
<?php
$prev_post = get_previous_post();
if ( ! empty( $prev_post ) ): ?>
	<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
		<?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>
	</a>
<?php endif; ?>

<?php			
$next_post = get_next_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>
	<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?></a>
<?php endif; ?>

					
	</div><!---page-wrapper-->
	</div><!---page-right-content-->

<div class="clear"></div>
</div><!---blog-content-->


<?php get_footer(); ?>
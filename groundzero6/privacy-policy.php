<?php get_header(); ?>


<div class="site">
	<div class="wrapper">
		<div class="white-content">


		<h1 class="entry-title" ><?php the_title(); ?></h1>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content(); ?>
			</div><!---post-->
			
		<?php endwhile; ?>

		<?php else: ?>
			<p>There are no post to show yet</p>

		<?php endif; ?>

		</div><!---white-content-->
	</div><!---wrapper-->
</div><!---site-->



<?php get_footer(); ?>
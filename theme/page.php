<?php get_header(); ?>



	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry">
		
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>
						
			<?php the_content(); ?>
			
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					
		</div>
		
    </div>
    	
		<?php endwhile; endif; ?>

	<?php edit_post_link('Editar este texto', '<p>', '</p>'); ?>

	</div>

<?php get_sidebar(); ?>



<?php get_footer(); ?>
<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		 <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Posts de &#8216;<?php single_cat_title(); ?>&#8217;</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Posts de <?php the_time('j M Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Posts de <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Posts de <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Autor</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>


  <?php while (have_posts()) : the_post(); ?>
  <div class="entry">
    <div id="post-<?php the_ID(); ?>">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        <?php the_title(); ?>
        </a></h2>
      <p class="infoPost"><small>Postado em
      <?php the_time('j \d\e F \d\e Y') ?>
      em
      <?php the_category(', '); ?>
      </small></p>
      <div class="txtPost">
				<?php the_content('<p class="serif">Continuar lendo este post &raquo;</p>'); ?>
			</div>

      <div class="cxAutor">
				<?php echo get_avatar( get_the_author_email(), '70' ); ?>
        <div class="detalhesAutorPost">
          <h3><?php the_author(); ?></h3>
          <p><?php the_author_description(); ?></p>
          <ul>
            <li class="linkPostsAutor">Ver todos os posts de <?php the_author_posts_link(); ?> / </li>
            <li class="twitterAutor">Me adicione no <a href="http://www.twitter.com/<?php the_author_nickname(); ?>" target="_blank">Twitter</a></li>
          </ul>
        </div>
      </div>
            
      <div class="posts_similar">
        <h3>Posts relacionados</h3>
        <?php similar_posts(); ?>
      </div>

      </div>
	</div>
						
		<?php endwhile; ?>

<div id="navegacao">
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>

	<?php else : ?>
				<div class="entry">
		<h2 class="center">Oops!<br />
		Nada foi encontrado...</h2>
</div>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Resultado da pesquisa</h2>

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
      <div id="HOTWordsTxt" name="HOTWordsTxt" class="txtPost">
        <?php the_content('Continuar lendo este post &raquo;'); ?>
      </div>

      <p class="comentariosPosts">Coment&aacute;rios:
        <?php comments_popup_link('Nenhum. Seja o primeiro!', '1 Coment&aacute;rio', '% Coment&aacute;rios'); ?>
      </p>
      
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
		<h2 class="center">Oops!</h2>
		<p>Nada encontrado... ser&aacute; que est&aacute; escrito certinho?</p>

</div>
	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php get_header(); ?>



<div id="content"> 

  <div id="slider1" class="contentslide">
    <div class="opacitylayer">  
			<?php
        $getposts = get_posts('category=1184&numberposts=4');
        foreach($getposts as $post):
        setup_postdata($post);
        $tipo_img = 'img-destaque';
      ?>
      <div class="contentdiv">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, $tipo_img, true); ?>" /></a>
        <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="pagination" id="paginate-slider1">
  </div>
  <script type="text/javascript">
  //Define: ContentSlider("slider_ID", [autorotate_miliseconds], [custompaginatelinkstext], [customnextlinktext])
  ContentSlider("slider1", 6000)
  </script>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry">

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

      <p class="infoPost"><small>Postado em
      <?php the_time('j \d\e F \d\e Y') ?>
      em
      <?php the_category(', '); ?>
      </small></p>



<div class="anunciosGoogle">

<p>

<script type="text/javascript"><!--

google_ad_client = "pub-0063792419281840";

/* 468x60, topo_content */

google_ad_slot = "7877724226";

google_ad_width = 468;

google_ad_height = 60;

//-->

</script>

<script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script>

</p>

</div>
			<div id="HOTWordsTxt" name="HOTWordsTxt" class="txtPost">

				<?php the_content('<p class="serif">Continuar lendo este post &raquo;</p>'); ?>

			</div>
			

				<?php wp_link_pages(array('before' => '<p class="paginador"><strong>P&aacute;ginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


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

					<?php if(function_exists('similar_posts')){ similar_posts(); } ?>

				</div>

				

			</div>

		</div>



<div class="entry">

	<?php comments_template(); ?>

	</div>



	<?php endwhile; else: ?>

<div class="entry">

		<p>Sorry, no posts matched your criteria.</p>

</div>

<?php endif; ?>



	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


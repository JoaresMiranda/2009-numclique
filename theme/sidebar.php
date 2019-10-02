<div id="sidebar">
  <div id="recursos">
    <p id="rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="Assine nosso RSS">Assine nosso feed</a></p>
    <p id="twitter"><a href="http://www.twitter.com/numclique" target="_blank" title="Acompanhe-nos pelo Twitter">Acompanhe a NumClique pelo Twittter. Sigam-me os bons</a></p>
    <div id="assinarEmail">
      <form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=1785297', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <h2>Assine a NumClique por e-mail</h2>
        <p>
          <input type="text" name="email" id="campoAssinar" value="Insira aqui seu e-mail" onfocus="if(this.value=='Insira aqui seu e-mail')this.value=''" onblur="if(this.value=='')this.value='Insira aqui seu e-mail'" />
          <input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1785297" name="url" />
          <input type="hidden" value="NumClique - Estilo de vida digital" name="title" />
          <input type="hidden" name="loc" value="pt_BR" />
          <input type="image" id="btAssina" src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/bt-assinar-mail.gif" value="Assinar" />
        </p>
      </form>
    </div>
  </div>

	<div id="aprenda-numclique">
  	<h2>Aprenda NumClique</h2>
    <ul>
    <?php
      $getposts = get_posts('category=17&numberposts=4');
      foreach($getposts as $post):
      setup_postdata($post);
			$tp_img = 'aprenda-numclique';
    ?>
      <li>
      	<p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
        <img src="<?php echo get_post_meta($post->ID, $tp_img, true); ?>" /></a></p>
      	<p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
     </li>
    <?php endforeach; ?>
    </ul>
	</div>
  
  <div id="bannerQuadrado">
		<?php if(function_exists('mba_display_zone')) mba_display_zone(6); ?>
  </div>
<!--  
  <div id="nossoCondominio">
  	<h2>Nosso condom&iacute;nio</h2>
	  <ul>
    </ul>
  </div>
-->

  <div id="postsRecentes">
    <h2>Posts recentes</h2>
    <ul>
      <?php
				$myposts = get_posts('numberposts=15&offset=1');
				foreach($myposts as $post) :
				?>
      <li><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
	</div>

  <?php include (TEMPLATEPATH . '/lsidebar.php'); ?>
  <?php include (TEMPLATEPATH . '/rsidebar.php'); ?>
  
  <div id="blogsAmigos">
  	<h2>Blogs Amigos</h2>
    <div>
	  	<a href="http://ueba.com.br/" title="U&Ecirc;BA - Os melhores links" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/ueba.jpg" /></a>
	  	<a href="http://cybervida.com.br/" title="Cyber Vida - Realidade Digital" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/cyber-vida.jpg" /></a>	
	  	<a href="http://www.sedentario.org" title="Sedent&aacute;rio &amp; Hiperativo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/sedentario.jpg" /></a>
	  	<a href="http://www.rodrigostoledo.com" title="RodrigoSToledo.com" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/rodrigo-toledo.jpg" /></a>
	  	<a href="http://iradex.net/" title="Iradex.net" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/iradex.jpg" /></a>
	  	<a href="http://cinemacomrapadura.com.br/" title="Cinema com Rapadura" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/cinema-com-rapadura.jpg" /></a>
	  	<a href="http://www.mundotecno.info" title="Mundo Tecno - Tecnologia, internet e divers&atilde;o" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/mundo-tecno.jpg" /></a>
    	<a href="http://www.euqueru.net" title="EuQueru.net  - Eu quero e fiquei querendo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/euqueru.jpg" /></a>
	  	<a href="http://www.conversamole.net" title="ConversaMole.net" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/conversamole.jpg" /></a>
	  	<a href="http://www.fayerwayer.com.br" title="FayerWayer Brasil - Doses di&aacute;rias de tecnologia em portugu&ecirc;s" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/fayer-wayer.jpg" /></a>
		  	<a href="http://blog.opovo.com.br/tecnosfera" title="Tecnosfera" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/blogs-amigos/tecnosfera.jpg" /></a>

      </div>
  </div>
  
  <div id="patrocinio">
  	<h2>Patroc&iacute;nio</h2>
    <a href="http://www.argohost.net" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/logo-argo.gif" /></a>
  </div>
	
	<div id="monitorOnline">
  	<a href="http://whos.amung.us/stats/32avkjpycm68/" target="_blank"><img src="http://whos.amung.us/swidget/32avkjpycm68.gif" width="80" height="15" border="0" title="Clique e veja quantas pessoas est&atilde;o online" /></a>
  </div>

</div>
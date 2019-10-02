<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-language" content="pt-br" />
<meta name="robots" content="index,follow" />
<meta name="author" content="Equipe NumClique.net" />
<meta name="verify-v1" content="eP+vA6K9ihp+EdJYKdkB9TDF2xZTgdWj9b8uJG6ga7w=" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" type="image/ico" href="http://www.numclique.net/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="Numclique.net - Estilo de vida digital" href="<?php bloginfo('url'); ?>/feed/" />
<link rel="alternate" type="application/rss+xml" title="Coment&aacute;rios de Numclique.net - Estilo de vida digital" href="<?php bloginfo('url'); ?>/comments/feed/" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if IE]>
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/style-ie.css" type="text/css" media="screen" />
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/destaque/contentslider.css" />
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/destaque/contentslider.js"></script>

<title>
<?php if(is_single()): ?>
<?php the_title('', ' &raquo; '); ?>
<?php endif; ?>
<?php bloginfo('name'); ?>
</title>
<?php wp_head(); ?>

</head>
<body>
<div id="geral">
<div id="top">
  <div id="superbanner">
		<div id="sb">
			<?php if(function_exists('mba_display_zone')) mba_display_zone(5); ?>
    </div>
    <a href="<?php bloginfo('url'); ?>/mediakit" id="linkPublicidadeSb">Publicidade</a>
  </div>
  <div id="header">
    <h1 class="blogtitle"><a href="<?php echo get_option('home'); ?>/">
      <?php bloginfo('name'); ?>
      </a></h1>
  </div>
</div>
<div id="barraNavegacao">
  <ul id="menu">
    <li><a href="<?php bloginfo('url'); ?>" class="item-Iniciar">Inicial</a></li>
     <li><a href="<?php bloginfo('url'); ?>/mediakit" class="item-Publicidade">Publicidde</a></li>
    <?php wp_list_pages('exclude=495,5085&title_li=&sort_column=menu_order'); ?>
  </ul>
  <div id="busca">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </div>
</div>
<div id="main">

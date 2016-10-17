<!DOCTYPE html>
<html lang="pt-br" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase no-indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/fonte/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/wp.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/load.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/colorbox.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory' ); ?>/css/style.css" />

<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/colorbox.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/cycle.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/stellar.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/wow.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory' ); ?>/js/funcoes.js"></script>

<?php wp_head(); ?>
</head>

<body>
<header>
    <article>
        <a href="<?php bloginfo('home'); ?>/"><h1>Construtora Gotardo</h1></a>
        <i class="menu"></i>
        <nav>
            <ul>
                <li><a href="<?php bloginfo('home'); ?>/">Home</a></li>
                <li><a href="<?php bloginfo('home'); ?>/a-empresa">A Empresa</a></li>
                <li><a href="<?php bloginfo('home'); ?>/imoveis-a-venda">Imóveis À Venda</a></li>
                <li><a href="<?php bloginfo('home'); ?>/imoveis-entregues">Imóveis Entregues</a></li>
                <li><a href="<?php bloginfo('home'); ?>/contato">Contato</a></li>
            </ul>
        </nav>
    </article>
</header>
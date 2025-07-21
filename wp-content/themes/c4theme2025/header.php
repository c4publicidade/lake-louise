<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Marcel Bonfim">
    <!-- meta og -->
    <!-- Google Tag Manager adicionado em 20/02/25 por marcel-->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NHV8THG8');</script>
	<!-- End Google Tag Manager -->
	<!-- Google tag (gtag.js) adicionado em 25/02/25 por marcel-->

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-VTJHTCB6BR"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());


	  gtag('config', 'G-VTJHTCB6BR');
	</script>

    <!-- meta og -->
    <meta property="og:title" content="<?php echo get_bloginfo('name');?>" />
    <meta property="og:url" content="<?php bloginfo('template_url'); ?>" />
    <meta property="og:description" content="<?php echo get_bloginfo('description');?>">
    <meta property="og:image" itemprop="image" content="https://lakelouisecampinas.com.br/wp-content/uploads/2025/02/cropped-ICONE-SITE.png"/>
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_GB" />

    <!-- Descrição -->
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <!-- Titulo -->
    <title><?php if(is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?></title>
   
    <!-- CSS Gabriel -->
    <!-- <link href="<?php bloginfo('template_url'); ?>/resets.css" rel="stylesheet"> -->
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <!-- Materialize -->
    <link href="<?php bloginfo('template_url'); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Icons -->
    
    <!-- CSS de CDNs externas -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- ////////////////////// LGPD - PARTE #2/3 ////////////////////// -->
    <link href="<?php bloginfo('template_url'); ?>/css/lgpd.css" rel="stylesheet">
    <!-- Fontes -->

    <!-- ////////////////////// FIM PARTE #2/3 ////////////////////// -->
    <!-- SLICK SLIDE 1/3 -->
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" rel="stylesheet">
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

  <link itemprop="thumbnailUrl" href="https://lakelouisecampinas.com.br/wp-content/uploads/2025/02/cropped-ICONE-SITE.png">

  <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
  <link itemprop="url" href="https://lakelouisecampinas.com.br/wp-content/uploads/2025/02/cropped-ICONE-SITE.png">


    <!-- Google Tag Manager (noscript) adicionado em 20/02/25 por marcel-->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHV8THG8"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
    <!-- ////////////////////// LGPD - PARTE #1/3 (HTML, CSS e jQuery) ////////////////////// -->
      <div class="lgpd">
        <div class="content">
          <div class="container">
            <p>Este site usa cookies para melhorar a sua experiência. Ao continuar, você concorda com nossa <a target="_target" href="politica-de-privacidade">política e privacidade</a>. <a href="#" id="fecha" class="notscrollable">aceitar</a></p>
          </div>
        </div>
      </div> 
    <!-- ////////////////////// FIM PARTE #1 ////////////////////// -->
    <nav role="navigation" class="menu">
      <div class="nav-wrapper container">
        <a href="<?php echo get_site_url(); ?>" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/images/Logo_branco_site 1.png" alt="logo"> </a>
        <!-- Menu desktop -->
        <ul class="right hide-on-med-and-down">
          
          <li><a href="<?php echo get_site_url(); ?>/obras">Obras</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="<?php echo get_site_url(); ?>/calendario">Calendario</a></li>
          <?php 
          if (is_user_logged_in() && current_user_can('administrator')) {
            ?>
            <li><a href="<?php echo get_site_url(); ?>/usuarios">Usuários</a></li>
            <?php
        } 
          ?>
          <?php
            if (!is_user_logged_in()) {
          ?>
          <li><a href="<?php echo get_site_url(); ?>/login">Login</a></li>
          <?php
            }elseif(is_user_logged_in()) {
          ?>
            <li><a href="<?php echo get_site_url(); ?>/perfil-de-usuario">Perfil de Usuário</a></li>
            <li><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li>
          <?php
            }
          ?>
        </ul>
        <!-- Menu mobile -->
        <ul id="nav-mobile" class="sidenav">
          <li><a href="<?php echo get_site_url(); ?>/obras">Obras</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="#" id="fechar">Fechar</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"
          ><i class="material-icons menu">menu</i></a
        >
      </div>
    </nav>
    <div class="fixo">
		
 <?php
		global $whats_number;
    global $whats_msg;
    
    $whats_number = '19974060287';
    $whats_msg = 'Oi, visitei o site e gostaria de mais informações sobre o *Lake Louise*';
			  
			  ?>

			  <a href="https://api.whatsapp.com/send?phone=<?php echo $whats_number; ?>&text=<?php echo $whats_msg; ?>" target="!_blank" class="pulse">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.184" height="24.3" viewBox="0 0 24.184 24.3">
  <defs>
    <clipPath id="clip-path">
      <rect id="Retângulo_106" data-name="Retângulo 106" width="24.184" height="24.3" fill="#fff"/>
    </clipPath>
  </defs>
  <g id="Grupo_171" data-name="Grupo 171" transform="translate(0 0)">
    <g id="Grupo_170" data-name="Grupo 170" transform="translate(0 0)" clip-path="url(#clip-path)">
      <path id="Caminho_203" data-name="Caminho 203" d="M20.661,3.531A12.044,12.044,0,0,0,1.708,18.06L0,24.3l6.383-1.675a12.034,12.034,0,0,0,5.754,1.466h0a12.047,12.047,0,0,0,8.518-20.56M12.142,22.057h0a10,10,0,0,1-5.094-1.395l-.365-.217-3.788.994L3.9,17.746l-.238-.379a10.008,10.008,0,1,1,8.478,4.69" transform="translate(0 0)" fill="#fff" fill-rule="evenodd"/>
      <path id="Caminho_204" data-name="Caminho 204" d="M23.932,21.339c-.3-.151-1.78-.878-2.056-.979s-.477-.151-.677.151-.777.979-.953,1.18-.351.226-.652.075a8.219,8.219,0,0,1-2.419-1.493A9.064,9.064,0,0,1,15.5,18.188c-.175-.3-.019-.464.132-.614.135-.135.3-.351.451-.527a2.056,2.056,0,0,0,.3-.5.554.554,0,0,0-.025-.527c-.075-.151-.677-1.632-.927-2.234-.244-.587-.493-.507-.677-.516s-.376-.011-.576-.011a1.105,1.105,0,0,0-.8.376,3.376,3.376,0,0,0-1.053,2.51,5.857,5.857,0,0,0,1.228,3.113,13.413,13.413,0,0,0,5.14,4.543,17.215,17.215,0,0,0,1.715.634,4.124,4.124,0,0,0,1.9.119,3.1,3.1,0,0,0,2.031-1.431,2.514,2.514,0,0,0,.175-1.431c-.075-.126-.276-.2-.577-.351" transform="translate(-6.3 -6.777)" fill="#fff" fill-rule="evenodd"/>
    </g>
  </g>
</svg>
  </a>
</div>

  <main>
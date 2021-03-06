<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apros - Wordpress</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,500" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation-icons.css">
    <link href="<?php bloginfo('template_url'); ?>/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body>

   <div id="menu-fixed">
       <div class="row" data-aos="fade-up">
            <div class="large-12 large-centered medium-12 small-12 columns">
               <div class="title-bar" data-responsive-toggle="menu_bar" data-hide-for="medium">
                    <button class="menu-icon" type="button" data-toggle="menu_bar"></button>
                    <div class="title-bar-title"><img src="<?php bloginfo('template_url'); ?>images/logo-main.png" alt=""></div>
               </div>
                <div id="menu_bar" class="top-bar" data-animate="slide-in-down slide-out-up">
                    <div class="top-bar-left">
                        <ul class="menu">
                            <li class="menu-text"><img src="<?php bloginfo('template_url'); ?>images/logo-main.png" alt=""></li>
                            <li><a href="#header">Inicio</a></li>
                            <li><a href="#nosotros">Nosotros</a></li>
                            <li><a href="#catalogo">Producto</a></li>
                            <li><a href="#footer">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu">
                            <li><a href="#">ES</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <header id="header">
        <div id="mensaje" class="row">
            <div class="large-10 columns small-12 medium-12 large-centered" data-aos="fade-up">
                <h1>Lorem ipsum dolor sit amet</h1>
                <h5>consectetur adipisicing elit.</h5>
            </div>
        </div>
    </header>

    <section id="nosotros">
        <div class="row" data-aos="fade-up">
            <div class="large-11 large-centered medium-12 small-12 columns">
                <div class="row">
                    <div class="large-7 small-12 medium-12 columns">
                        <div id="sobre_nosotros">
                            <div id="multimedia_presentacion">
                                <img src="<?php bloginfo('template_url'); ?>/images/hands.png" alt="" id="img_nosotros">
                                <button id="video_open" data-open="video_nosotros"><img src="<?php bloginfo('template_url'); ?>/images/thumbnail.png" alt=""></button>
                                <div class="reveal" id="video_nosotros" data-reveal>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7Bmvtq19G98" frameborder="0" allowfullscreen></iframe>
                                    <button class="close-button" data-close aria-label="Close reveal" type="button">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div id="presentacion">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus libero recusandae dignissimos consequatur accusantium nam optio autem sequi excepturi, cupiditate beatae illo itaque, adipisci obcaecati. Quidem quis vero voluptatem culpa!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, non repellendus fuga architecto sint cupiditate deleniti cum quisquam doloribus sapiente porro earum aliquid soluta perferendis atque tempore accusantium nesciunt maxime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-5 medium-12 small-12 columns">
                        <div class="orbit" role="region" aria-label="" data-orbit>
                            <div class="orbit-wrapper">
                                <ul class="orbit-container">
                                    <li class="is-active orbit-slide">
                                        <div>
                                            <h3>NOTICIAS</h3>
                                            <h6>Lima 14 de febrero, 2017</h6>
                                            <h4>Company planea exportar abono a EE.UU, México y Colombia</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, aliquid. Soluta quaerat dolores nostrum alias aspernatur veniam... <a href="#">leer más</a></p>
                                        </div>
                                    </li>
                                    <li class="orbit-slide">
                                        <div>
                                            <h3>NOTICIAS</h3>
                                            <h6>Lima 15 de febrero, 2017</h6>
                                            <h4>Company planea exportar abono a EE.UU, México y Colombia</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, aliquid. Soluta quaerat dolores nostrum alias aspernatur veniam... <a href="#">leer más</a></p>
                                        </div>
                                    </li>
                                    <li class="orbit-slide">
                                        <div>
                                            <h3>NOTICIAS</h3>
                                            <h6>Lima 16 de febrero, 2017</h6>
                                            <h4>Company planea exportar abono a EE.UU, México y Colombia</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, aliquid. Soluta quaerat dolores nostrum alias aspernatur veniam... <a href="#">leer más</a></p>
                                        </div>
                                    </li>
                                    <li class="orbit-slide">
                                        <div>
                                            <h3>NOTICIAS</h3>
                                            <h6>Lima 17 de febrero, 2017</h6>
                                            <h4>Company planea exportar abono a EE.UU, México y Colombia</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, aliquid. Soluta quaerat dolores nostrum alias aspernatur veniam... <a href="#">leer más</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <nav class="orbit-bullets">
                                <button class="is-active" data-slide="0"></button>
                                <button data-slide="1"></button>
                                <button data-slide="2"></button>
                                <button data-slide="3"></button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="catalogo">
        <div class="row" data-aos="fade-up">
            <div class="large-11 large-centered medium-12 small-12 columns">
                <ul class="tabs" data-responsive-accordion-tabs="accordion medium-accordion large-tabs" id="mini_galeria"> 
                    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><b>Abono</b>Mejorador para suelos</a></li>
                    <li class="tabs-title"><a href="#panel2"><b>Abono</b>Para Jardineria</a></li>
                    <li class="tabs-title"><a href="#panel3"><b>Tierra</b>Preparada</a></li>
                    <li class="tabs-title"><a href="#panel4"><b>Guano</b>Orgánico Fino</a></li>
                    <li class="tabs-title"><a href="#panel5"><b>Compost</b>Orgánico</a></li>
                </ul>

                <div class="tabs-content" data-tabs-content="mini_galeria">
                    <div class="tabs-panel is-active" id="panel1">
                        <div class="row">
                            <div class="large-8 medium-12 small-12 columns">
                                <div class="row hh">
                                    <div class="large-7 medium-12 small-12 columns">
                                        <div class="mini_galeria">
                                            <div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                                                <div class="orbit-wrapper">
                                                    <ul class="orbit-container">
                                                        <li class="is-active orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <nav class="orbit-bullets text-left">
                                                    <button class="is-active" data-slide="0"></button>
                                                    <button data-slide="1"></button>
                                                    <button data-slide="2"></button>
                                                    <button data-slide="3"></button>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-5 medium-12 small-12 columns hg">
                                        <div class="catalogo_titulo">
                                            <h1>Abono</h1>
                                            <h5>Mejorador para suelos</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="descripcion">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorum aspernatur sequi, ea temporibus fuga, commodi porro velit facere blanditiis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aperiam aspernatur maiores mollitia harum minus neque, fuga aliquid, perferendis ratione ducimus.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="links_interes">
                                        <ul>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">CONTACTAR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-12 small-12 columns">
                                <div class="ensayos">
                                    <ul class="ensayos_carpeta">
                                        <h4>Ensayos</h4>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-panel" id="panel2">
                        <div class="row">
                            <div class="large-8 medium-12 small-12 columns">
                                <div class="row hh">
                                    <div class="large-7 medium-12 small-12 columns">
                                        <div class="mini_galeria">
                                            <div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                                                <div class="orbit-wrapper">
                                                    <ul class="orbit-container">
                                                        <li class="is-active orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <nav class="orbit-bullets text-left">
                                                    <button class="is-active" data-slide="0"></button>
                                                    <button data-slide="1"></button>
                                                    <button data-slide="2"></button>
                                                    <button data-slide="3"></button>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-5 medium-12 small-12 columns hg">
                                        <div class="catalogo_titulo">
                                            <h1>Abono</h1>
                                            <h5>Para jardineria</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="descripcion">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorum aspernatur sequi, ea temporibus fuga, commodi porro velit facere blanditiis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aperiam aspernatur maiores mollitia harum minus neque, fuga aliquid, perferendis ratione ducimus.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="links_interes">
                                        <ul>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">CONTACTAR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-12 small-12 columns">
                                <div class="ensayos">
                                    <ul class="ensayos_carpeta">
                                        <h4>Ensayos</h4>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-panel" id="panel3">
                        <div class="row">
                            <div class="large-8 medium-12 small-12 columns">
                                <div class="row hh">
                                    <div class="large-7 medium-12 small-12 columns">
                                        <div class="mini_galeria">
                                            <div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                                                <div class="orbit-wrapper">
                                                    <ul class="orbit-container">
                                                        <li class="is-active orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <nav class="orbit-bullets text-left">
                                                    <button class="is-active" data-slide="0"></button>
                                                    <button data-slide="1"></button>
                                                    <button data-slide="2"></button>
                                                    <button data-slide="3"></button>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-5 medium-12 small-12 columns hg">
                                        <div class="catalogo_titulo">
                                            <h1>Tierra</h1>
                                            <h5>Preparada</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="descripcion">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorum aspernatur sequi, ea temporibus fuga, commodi porro velit facere blanditiis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aperiam aspernatur maiores mollitia harum minus neque, fuga aliquid, perferendis ratione ducimus.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="links_interes">
                                        <ul>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">CONTACTAR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-12 small-12 columns">
                                <div class="ensayos">
                                    <ul class="ensayos_carpeta">
                                        <h4>Ensayos</h4>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-panel" id="panel4">
                        <div class="row">
                            <div class="large-8 medium-12 small-12 columns">
                                <div class="row hh">
                                    <div class="large-7 medium-12 small-12 columns">
                                        <div class="mini_galeria">
                                            <div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                                                <div class="orbit-wrapper">
                                                    <ul class="orbit-container">
                                                        <li class="is-active orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <nav class="orbit-bullets text-left">
                                                    <button class="is-active" data-slide="0"></button>
                                                    <button data-slide="1"></button>
                                                    <button data-slide="2"></button>
                                                    <button data-slide="3"></button>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-5 medium-12 small-12 columns hg">
                                        <div class="catalogo_titulo">
                                            <h1>Guano</h1>
                                            <h5>Orgánico fino</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="descripcion">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorum aspernatur sequi, ea temporibus fuga, commodi porro velit facere blanditiis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aperiam aspernatur maiores mollitia harum minus neque, fuga aliquid, perferendis ratione ducimus.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="links_interes">
                                        <ul>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">CONTACTAR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-12 small-12 columns">
                                <div class="ensayos">
                                    <ul class="ensayos_carpeta">
                                        <h4>Ensayos</h4>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-panel" id="panel5">
                        <div class="row">
                            <div class="large-8 medium-12 small-12 columns">
                                <div class="row hh">
                                    <div class="large-7 medium-12 small-12 columns">
                                        <div class="mini_galeria">
                                            <div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                                                <div class="orbit-wrapper">
                                                    <ul class="orbit-container">
                                                        <li class="is-active orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                        <li class="orbit-slide">
                                                            <div class="text-center mini_img">
                                                                <img src="<?php bloginfo('template_url'); ?>/images/picture-icon.svg" alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <nav class="orbit-bullets text-left">
                                                    <button class="is-active" data-slide="0"></button>
                                                    <button data-slide="1"></button>
                                                    <button data-slide="2"></button>
                                                    <button data-slide="3"></button>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="large-5 medium-12 small-12 columns hg">
                                        <div class="catalogo_titulo">
                                            <h1>Compost</h1>
                                            <h5>Orgánico</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="descripcion">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorum aspernatur sequi, ea temporibus fuga, commodi porro velit facere blanditiis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aperiam aspernatur maiores mollitia harum minus neque, fuga aliquid, perferendis ratione ducimus.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="links_interes">
                                        <ul>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">Lorem ipsum dolor <img src="<?php bloginfo('template_url'); ?>/images/icon-download.svg" alt=""></a></li>
                                            <li><a href="">CONTACTAR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-12 small-12 columns">
                                <div class="ensayos">
                                    <ul class="ensayos_carpeta">
                                        <h4>Ensayos</h4>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="ensayos_columna">
                                            <ul class="ensayos_seccion">
                                                <li><a href="#">ensayo 1</a></li>
                                                <li><a href="#">ensayo 2</a></li>
                                                <li><a href="#">ensayo 3</a></li>
                                                <li><a href="#">ensayo 4</a></li>
                                                <li><a href="#">ensayo 5</a></li>
                                                <li><a href="#">ensayo 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="expanded row" data-aos="fade-up">
            <div class="large-4 medium-6 small-11 small-centered medium-uncentered large-uncentered columns contacto">
                <div class="row">
                    <div class="large-9 medium-12 small-12 large-offset-3">
                        <div id="contacto">
                            <ul class="lista_contacto">
                                <h3>Contactos</h3>
                                <li>
                                    <ul class="datos_contacto">
                                        <li><b>La Libertad - Trujillo</b></li>
                                        <li><a href="tel:292-3089">Juan de la cruz <i class="fi-telephone"></i>(01)292-3089</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="datos_contacto">
                                        <li><b>La Libertad - Trujillo</b></li>
                                        <li><a href="tel:292-3089">Juan de la cruz <i class="fi-telephone"></i>(01)292-3089</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="datos_contacto">
                                        <li><b>La Libertad - Trujillo</b></li>
                                        <li><a href="tel:292-3089">Juan de la cruz <i class="fi-telephone"></i>(01)292-3089</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="datos_contacto">
                                        <li><b>La Libertad - Trujillo</b></li>
                                        <li><a href="tel:292-3089">Juan de la cruz <i class="fi-telephone"></i>(01)292-3089</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="datos_contacto">
                                        <li><b>La Libertad - Trujillo</b></li>
                                        <li><a href="tel:292-3089">Juan de la cruz <i class="fi-telephone"></i>(01)292-3089</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="datos_contacto">
                                        <li><b>La Libertad - Trujillo</b></li>
                                        <li><a href="tel:292-3089">Juan de la cruz <i class="fi-telephone"></i>(01)292-3089</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-4 medium-6 small-11 small-centered medium-uncentered large-uncentered columns formulario">
                <div id="formulario">
                    <form action="">
                        <div class="row">
                            <input type="text">
                            <label for="">Nombre</label>
                        </div>
                        <div class="row">
                            <input type="email">
                            <label for="">Email</label>
                        </div>
                        <div class="row">
                            <input type="tel">
                            <label for="">Celular</label>
                        </div>
                        <div class="row">
                            <textarea type="text" rows="2"></textarea>
                            <label for="">Mensaje</label>
                        </div>
                        <div class="row">
                            <fieldset>
                                <input id="checkbox1" type="checkbox"><label for="checkbox1">Acepto las <b>condiciones de servicio</b> 
                                y la politica de privacidad de Company</label>
                            </fieldset>
                        </div>
                        <div class="row">
                            <input type="submit" class="button" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
            <div class="large-4 medium-11 small-11 columns small-centered large-uncentered ubicacion">
                    <div id="map"></div>
                <div id="cajaDireccion">
                    <div id="direccion">
                       <img src="<?php bloginfo('template_url'); ?>/images/icon-location.svg" alt="">
                        Av. Republica de Panamá.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-11 large-centered columns">
                <ul id="redes">
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-fb.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-linkedin.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.svg" alt=""></a></li>
                </ul>
                <p>COMPANY 2017 - Copyright © all Rights Reserved</p>
            </div>
        </div>
        <img id="icon-footer" src="<?php bloginfo('template_url'); ?>/images/hojas-background-footer.png" alt="">
    </footer>


    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/what-input.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDORdjJQGe-pf5KJw0Nzq06x5RA-NkViWs&callback=initMap"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <script>
    AOS.init({
        duration: 1200,
    });
  </script>
    <?php wp_footer(); ?>
</body>

</html>
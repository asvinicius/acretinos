<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:type" content="article">
		<meta property="og:title" content="<?= $ogdata['current']['title'] ?>">
		<meta property="og:description" content="<?= $ogdata['current']['description'] ?>">
		<meta property="og:url" content="<?= $ogdata['current']['url'] ?>">
		<meta property="og:image" content="<?= $ogdata['current']['image'] ?>">
		<meta property="og:image:width" content="72">
		<meta property="og:image:height" content="64">
		<meta property="og:image:alt" content="<?= $ogdata['current']['imagealt'] ?>">
        <meta name="keywords" content="<?= $ogdata['current']['keywords'] ?>">

        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/fancybox/jquery.fancybox.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/jcarousel.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/animate.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/flexslider.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/skins/default.css'); ?>" rel="stylesheet" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" />
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>

    <body>
        <div id="wrapper">
            <header>
                <div class="container ">
                    <div class="row nomargin">
                        <div class="span12">
                            <div class="headnav">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span2">
                            <div class="logo">
                                <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo2.png'); ?>" alt="" class="logo" /></a>
                            </div>
                        </div>
                        
                        <div class="span10">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>
                                        <ul class="nav topnav">
                                            <li class="dropdown" <?php if($ogdata['current']['id'] > 0 & $ogdata['current']['id'] < 3){echo 'active';} ?>">
                                                <a href="<?= base_url(); ?>">Acretinos <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li class="<?php if($ogdata['current']['id'] == 1){echo 'active';} ?>"><a href="<?= base_url('sobre'); ?>">Sobre a Liga</a></li>
                                                    <li class="<?php if($ogdata['current']['id'] == 2){echo 'active';} ?>"><a href="<?= base_url('historico'); ?>">Dados Históricos</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown" <?php if($ogdata['current']['id'] > 2 & $ogdata['current']['id'] < 7){echo 'active';} ?>">
                                                <a href="<?= base_url(); ?>">Ligas <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li class="<?php if($ogdata['current']['id'] == 3){echo 'active';} ?>"><a href="<?= base_url('classica'); ?>">Liga clássica </a></li>
                                                    <li class="<?php if($ogdata['current']['id'] == 4){echo 'active';} ?>"><a href="<?= base_url('bolao'); ?>">Bolão tiro-curto </a></li>
													<li class="<?php if($ogdata['current']['id'] == 5){echo 'active';} ?>"><a href="<?= base_url('mata'); ?>">Mata-mata </a></li>
													<li class="<?php if($ogdata['current']['id'] == 6){echo 'active';} ?>"><a href="<?= base_url('equipes'); ?>">Liga de equipes </a></li>
                                                </ul>
                                            </li>
                                            <li class="<?php if($ogdata['current']['id'] == 7){echo 'active';} ?>">
                                                <a href="<?= base_url('noticias'); ?>">Notícias </a>
                                            </li>
                                            <li class="<?php if($ogdata['current']['id'] == 8){echo 'active';} ?>">
                                                <a href="<?= base_url('contato'); ?>">Contato </a>
                                            </li>
                                            <li class="<?php if($ogdata['current']['id'] == 9){echo 'active';} ?>">
                                                <a href="http://192.168.100.26/portal/cadastro" target="_blank">Cadastro </a>
                                                <!-- <a href="<?= base_url('portal/cadastro'); ?>" target="_blank">Cadastro </a> -->
                                            </li>
                                            <li class="<?php if($ogdata['current']['id'] == 10){echo 'active';} ?>">
                                                <a href="http://192.168.100.26/portal" target="_blank">Login </a>
                                                <!-- <a href="<?= base_url('portal/login'); ?>" target="_blank">Login </a> -->
                                            </li>
                                            <!--
                                            <li class="dropdown">
                                                <a href="<?= base_url('tableclassic'); ?>">Liga Clássica <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('tableclassic'); ?>">Tabelas</a></li>
                                                    <li><a href="<?= base_url('subscribe'); ?>">Inscrição</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('contest'); ?>">Bolão <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('contest'); ?>">Informações</a></li>
                                                    <li><a href="<?= base_url('subscribe'); ?>">Inscrição</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('equipes'); ?>">Equipes <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('equipes'); ?>">Informações</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('parceiros'); ?>">Parceiros </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('playoff'); ?>">Mata-Mata <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('playoff'); ?>">Informações</a></li>
                                                    <li><a href="<?= base_url('subscribe'); ?>">Inscrição</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('#'); ?>">Contato </a>
                                            </li>
                                            -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
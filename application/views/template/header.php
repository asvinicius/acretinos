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
        <meta name="description" content="" />
        <meta name="author" content="" />

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
                        <div class="span4">
                            <div class="logo">
                                <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo2.png'); ?>" width="240" alt="" class="logo" /></a>
                            </div>
                        </div>
                        
                        <div class="span8">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>
                                        <ul class="nav topnav">
                                            <li class="dropdown active">
                                                <a href="<?= base_url('#'); ?>">Acretinos <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('#'); ?>">A Liga</a></li>
                                                    <li><a href="<?= base_url('#'); ?>">Dados Históricos</a></li>
                                                    <li><a href="<?= base_url('#'); ?>">Administradores</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('#'); ?>">Liga Clássica <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('#'); ?>">Tabelas</a></li>
                                                    <li><a href="<?= base_url('#'); ?>">Inscrição</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('#'); ?>">Bolão <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('#'); ?>">Informações</a></li>
                                                    <li><a href="<?= base_url('#'); ?>">Inscrição</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('#'); ?>">Contato </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<head>
    <title>ACRETINOS</title>
</head>
<section id="featured">
        <div id="nivo-slider">
            <div class="nivo-slider">
                <img src="<?= base_url('assets/img/bg-1.jpg'); ?>" alt="" title="#caption-1" />
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="nivo-caption" id="caption-1">
                            <div>
                                <h2>Liga Clássica</h2>
                                <p> Liga Clássica com inscrições abertas, aproveitem! </p>
                                <a href="<?= base_url('#'); ?>" class="btn btn-theme">Inscreva-se</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="callaction">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="big-cta">
                    <div class="cta-text">
                        <h3>O Bolão Acretinos dá premio em <span class="highlight"><strong>TODAS</strong></span> as rodads!</h3>
                    </div>
                    <div class="cta floatright">
                        <a class="btn btn-large btn-theme btn-large" href="#">Participe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-info-sign icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Liga Clássica</h6>
                                <p>
                                    Participe da Liga Clássica Acretinos e ganhe prêmios o ano todo..
                                </p>
                                <a href="<?= base_url('#'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-comment icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Bolão Acretinos</h6>
                                <p>
                                    Prêmios em todas as rodadas a uma mitada da sua mão
                                </p>
                                <a href="<?= base_url('#'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-info-sign icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Mata-Mata</h6>
                                <p>
                                    Mata-matas disputadíssimos com ótimos prêmios
                                </p>
                                <a href="<?= base_url('#'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-comment icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Dados históricos</h6>
                                <p>
                                    Deu uma mitada? Aqui seu nome ficará gravado na história!
                                </p>
                                <a href="<?= base_url('#'); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <h4 class="heading">Bancos para depósito</h4>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="portfolio">
                                    <li class="item-thumbs span2 design" data-id="id-0" data-type="web">
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?= $partner->partnername ?>" href="<?php echo "assets/img/partnerships/".$partner->partnermain; ?>">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <img src="<?php echo "assets/img/partnerships/".$partner->partnermini; ?>" alt="<?= $partner->partnerdescription ?>">
                                    </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        <?php if($covenants){ ?>
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <h4>Convênios com o <strong>SINDOJUS-AC</strong></h4>
                    <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
                        <?php foreach($covenants as $covenant){ ?>
                            <li>
                                <a href="#" title="<?= $covenant->company ?>">
                                    <img src="<?= base_url('assets/img/covenants/'.$covenant->covenantmini); ?>" class="client-logo" alt="" />
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
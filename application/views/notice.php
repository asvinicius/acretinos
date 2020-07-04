<head>
    <title>Notícias | SINDOJUS-AC</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Notícias</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span8">
                <?php if ($notice) { ?>
                    <?php foreach ($notice as $news) { ?>
                        <article>
                            <div class="row">
                                <div class="span8">
                                    <div class="post-image">
                                        <div class="post-heading">
                                            <h3><a href="<?= base_url('noticias/noticia/' . $news->newsslug); ?>"><?php echo $news->newstitle; ?></a></h3>
                                        </div>
										<a href="<?= base_url('noticias/noticia/' . $news->newsslug); ?>">
											<img src="<?php echo "http://".$_SERVER["REMOTE_ADDR"]."/acretinosadm/assets/img/news/".$news->newsthumb; ?>" alt="" />
										</a>
									</div>
                                    <p>
                                        <?php echo $news->newsresume; ?>
                                    </p>
                                    <div class="bottom-article">
                                        <ul class="meta-post">
                                            <li><i class="icon-calendar"></i><?php echo date('d/m/Y', strtotime($news->newsdate)); ?></li>
                                        </ul>
                                        <a href="<?= base_url('noticias/noticia/' . $news->newsslug); ?>" class="pull-right">Continue lendo <i class="icon-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    <!--
                    <div id="pagination">
                        <span class="all">Page 1 of 3</span>
                        <span class="current">1</span>
                        <a href="#" class="inactive">2</a>
                        <a href="#" class="inactive">3</a>
                    </div>
                    -->
                <?php } else { ?>
					<h4> Nenhuma notícia a ser exibida. </h4>
				<?php } ?>
            </div>
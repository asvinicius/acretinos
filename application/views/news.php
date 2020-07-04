<head>
    <title>Notícias | SINDOJUS-AC</title>
    <meta charset="utf-8">
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
                <?php if($news){ ?>
                    <article>
                        <div class="row">
                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><?php echo $news['newstitle']; ?></h3>
                                    </div>
                                </div>
                                <?php echo $news['newscontent']; ?>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-calendar"></i><?php echo date('d/m/Y', strtotime($news['newsdate'])); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php } ?>
                <?php if($news){ ?>
                    <div class="comment-area">                    
                        <?php if($sendcomment  != null){ ?>
                            <div class="<?php echo $sendcomment['class']; ?>">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php echo $sendcomment['message']; ?>
                            </div>
                        <?php } ?>
                        <?php if($comments){ ?>
                            <h4><?php 
                                    if($num == 1){
                                        echo $num." comentário";
                                    }else{
                                        echo $num." comentários";
                                    }
                                ?>
                            </h4>
                            <?php foreach($comments as $comment){ ?>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="media-content">
                                            <h6><span><?php echo date('d/m/Y', strtotime($comment->commentdate)); ?></span> <?php echo $comment->commentauthor; ?></h6>
                                            <p>
                                                <?php echo $comment->commentmessage; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php }else{ ?>
                            <h5>Nenhum comentário. Seja o primeiro!</h5>
                        <?php } ?>
                        <h4>Deixe seu comentário</h4>
                        <form action="<?= base_url('noticias/comentar'); ?>" method="post" class="contactForm">
                            <div class="row">
                                <input type="hidden" id="commentnews" name="commentnews" value="<?= $news['newsid']; ?>">
                                <div class="span4 form-group">
                                    <input type="text" name="commentauthor" class="form-control" id="commentauthor" placeholder="Seu nome" data-rule="minlen:4" data-msg="Necessário no mínimo 4 caracteres" />
                                    <div class="validation"></div>
                                </div>
                                <div class="span4 form-group">
                                    <input type="text" name="commentemailauthor" class="form-control" id="commentemailauthor" placeholder="Seu email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="span8 margintop10 form-group">
                                    <p>
                                        <textarea rows="12" name="commentmessage" id="commentmessage" class="input-block-level" placeholder="Escreva seu comentário" style="resize: none"></textarea>
                                    </p>
                                    <p class="text-center">
                                        <button class="btn btn-large btn-theme margintop10" type="submit">Enviar</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php }else{ ?>
                    <h5>Desculpe, notícia não encontrada.</h5>
                <?php } ?>
            </div>
			<div class="span4">
				<aside class="right-sidebar">
					<div class="widget">
						<form method="post" class="form-search" action="<?= base_url('noticias/pesquisar');?>">
							<input placeholder="Pesquisar..." type="text" class="input-large search-query" name="searchlabel" id="searchlabel">
							<button type="submit" class="btn btn-square btn-theme">Buscar</button>
						</form>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Categorias</h5>
						<ul class="cat">
							<?php foreach ($categories as $category){ ?>
								<li><i class="icon-angle-right"></i><a href="<?= base_url('noticias/categorias/' . $category->categoryid); ?>"><?php echo $category->categoryname; ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Notícias importantes</h5>
						<ul class="recent">
							<li>
								<?php if ($noticemenu) { ?>
									<?php foreach ($noticemenu as $newsmenu) { ?>
										<h6><a href="<?= base_url('noticias/noticia/' . $newsmenu->newsslug); ?>"><?php echo $newsmenu->newstitle; ?></a></h6>
										<p>
											<?php echo $newsmenu->newsresume; ?>
										</p>
									<?php } ?>
								<?php } ?>
							</li>
						</ul>
					</div>
					<div class="widget">
						<h5 class="widgetheading">Tags</h5>
						<ul class="tags">
							<?php foreach ($tags as $tag){ ?>
								<li><a href="<?= base_url('noticias/tags/' . $tag->tagid); ?>"><?= $tag->tagname; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</aside>
			</div>
        </div>
    </div>
</section>
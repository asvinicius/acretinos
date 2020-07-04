<head>
    <title>Bolão Acretinos</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Liga clássica</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <!-- Default table -->
        <div class="row">
            <div class="span8">
				<?php if($top){ ?>
					<h3>
						<?php 
							if($desc == 2){
								echo "Maiores pontuações da <strong> história </strong>";
							}else{ 
								echo "Maiores pontuações de <strong>".$year."</strong>";
							} 
						?>
					</h3>
					<table class="table">
						<?php if($top){ ?>
							<thead>
								<tr>
									<th title="Posição">#</th>
									<?php if($desc == 2){ ?>
										<th title="Ano">Ano</th>
									<?php } ?>
									<th title="Rodada">Rodada</th>
									<th title="Time">Time</th>
									<th title="Cartoleiro">Cartoleiro</th>
									<th title="Pontuação">Pontuação</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$cont = 0;
								foreach ($top as $team) { 
									$cont++;
									?>
									<tr>
										<td><?php echo $cont."ª" ?></td>
										<?php if($desc == 2){ ?>
											<td><?php echo $team->topyear ?></td>
										<?php } ?>
										<td><?php echo $team->topround ?></td>
										<td><?php echo $team->topteam ?></td>
										<td><?php echo $team->topcoach ?></td>
										<td><?php echo number_format($team->topaward, 2, '.', '') ?></td>
									</tr>
								<?php } ?>
							</tbody>
						<?php } ?>
					</table>
				<?php } else{ ?>
					<h3>Não existem informações para sua busca</h3>
				<?php } ?>
            </div>
            <div class="span4">     
                <div class="widget">
					<a class="btn btn-large btn-theme" href="<?= base_url('historico');?>">Voltar</a>
                </div>
				<hr />               
                <div class="widget">
                    <h5 class="widgetheading">Maiores pontuações</h5>
                    <ul class="cat">
                        <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/recordesclassica');?>"> História </a></li>
                        <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/recordesclassicaano/2019');?>"> 2019 </a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
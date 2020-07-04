<head>
    <title>Bolão Acretinos</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Bolão</h2>
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
                <h3>
					Resultados da <strong><?= $spin ?>ª</strong> rodada de <strong><?= $year ?></strong>
                </h3>
                <table class="table">
					<thead>
						<tr>
							<th title="Posição">#</th>
							<th title=""></th>
							<th title="Time">Time</th>
							<th title="Cartoleiro">Cartoleiro</th>
							<th title="Pontuação">Pontuação</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$cont = 0;
						foreach ($pasteround as $team) { 
							$cont++;
							?>
							<tr <?php if($cont < 11) {  ?>
								class="success"
							<?php } ?>>
								<td><?php echo $cont."º" ?></td>
								<td>
									<?php if($cont == 1) { ?>
									<i class="icon-trophy icon-32" title="Campeão"></i>
									<?php } ?>
								</td>
								<td><?php echo $team->ctrkteam ?></td>
								<td><?php echo $team->ctrkcoach ?></td>
								<td><?php echo number_format($team->ctrkaward, 2, '.', '') ?></td>
							</tr>
						<?php } ?>
					</tbody>
                </table>
                <p>Por motivos de limitações de processamento, apenas os 20 melhores pontuadores aparecem na lista</p>
            </div>
            <div class="span4">
                <div class="widget">
					<a class="btn btn-large btn-theme" href="<?= base_url('historico/recordesbolao');?>">Recordes</a>
                </div>
                <?php if($comp){ ?>
					<hr />
                    <div class="widget">
                        <h5 class="widgetheading">Rodadas passadas</h5>
                        <ul class="cat">
                            <?php foreach ($comp as $data) { ?>
                                <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/bolaovariacao/'.$data->spinid.'-'.$year);?>"> <?= $data->spinid ?>ª Rodada </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>
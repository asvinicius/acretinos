<head>
    <title>Histórico</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span8">
                <div class="inner-heading">
                    <h2>Dados históricos - Liga clássica</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <!-- Default table -->
        <div class="row">
            <div class="span9">
                <h3> Liga Acretinos <?php echo $year; ?> - <?php echo $desc['descdefine']; ?> </h3>
                <table class="table">
                    <?php if ($ranking) { ?>
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
                                foreach ($ranking as $team) { 
                                    $cont++;
                                    ?>
                                <tr <?php if($cont == 1) {  ?>
                                    class="success"
                                <?php } ?>>
                                    <td><?php echo $cont ?>º</td>
                                    <td>
                                        <?php if($cont == 1) { ?>
                                        <i class="icon-trophy icon-48" title="Campeão"></i>
                                        <?php } ?>
                                    </td>
                                    
                                    <td><?php echo $team->clrkteam ?></td>
                                    <td><?php echo $team->clrkcoach ?></td>
                                    <td><?php echo number_format($team->clrkaward, 2, '.', '') ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php }else{ ?>
                        <h4>Não existe informações para sua busca!</h4>
                    <?php } ?>
                </table>
            </div>
            <div class="span3">
                <div class="widget">
					<a class="btn btn-large btn-theme" href="<?= base_url('historico/recordesclassica');?>">Recordes</a>
                </div>
                <div class="widget">
                    <?php if ($rkall) { ?>
						<hr />
                        <h5 class="widgetheading">Veja mais</h5>
                        <ul class="cat">
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 1){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classica/'.$year);?>"> Campeonato </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 2){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/2-'.$year);?>"> 1º Turno </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 3){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/3-'.$year);?>"> 2º Turno </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 4){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/4-'.$year);?>"> Abril </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 5){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/5-'.$year);?>"> Maio </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 6){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/6-'.$year);?>"> Junho </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 7){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/7-'.$year);?>"> Julho </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 8){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/8-'.$year);?>"> Agosto </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 9){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/9-'.$year);?>"> Setembro </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 10){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/10-'.$year);?>"> Outrubro </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 11){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/11-'.$year);?>"> Novembro </li>
                                <?php }
                            ?>
                            <?php 
                                $aux = 0;
                                foreach ($rkall as $rk) { 
                                    if($rk->description == 12){
                                        $aux = 1;
                                    }
                                }
                                if($aux>0){ ?>
                                    <li><i class="icon-angle-right"></i><a href="<?= base_url('historico/classicavariacao/12-'.$year);?>"> Dezembro </li>
                                <?php }
                            ?>
                            <!--
                            <div class="solidline"></div>
                            <li><i class="icon-angle-right"></i><a href="<?= base_url('#');?>"> Melhores pontuações </li>
                            -->
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>
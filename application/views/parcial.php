<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ini_set("display_errors", 0 );
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <title>Parcial</title>

    <!-- Principal CSS do Bootstrap -->
        <link href="<?= base_url('assets/css/enquete/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/enquete/form-validation.css'); ?>" rel="stylesheet" />
  </head>

  <body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
		<img class="mb-4" src="<?= base_url('assets/img/logotipo.png'); ?>" alt="" width="157" height="120">
        <h2>Liga Acretinos</h2>
		<?php if ($message != null) { ?>
			<div class="alert alert-<?php echo $message["class"]; ?>"> <?php echo $message["message"]; ?> <a href="<?= base_url(); ?>">Voltar para o site</a> </div>
		<?php } ?>
        <p class="lead">
			Resultado parcial
		</p>
      </div>

      <div class="row">
        <div class="col-md-12">
			<p class="lead">
				TOTAL: <?= $total; ?> votos
			</p>
			<p class="lead">
				R$ 100,00: <?= $totalzero ?> votos (<?= $percentzero ?>%)
			</p>
			<p class="lead">
				R$ 150,00: <?= $totalone ?> votos (<?= $percentone ?>%)
			</p>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <div class="copyright">
			&copy; Liga Acretinos <script>document.write(new Date().getFullYear())</script>, Desenvolvido por Vinícius Anjos | Tema por <a href="https://www.creative-tim.com">Creative Tim</a>
		</div>
      </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
		window.jQuery || document.write('<script src="http://192.168.100.26/acretinos/assets/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
    <script src="<?= base_url('assets/js/enquete/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/enquete/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/enquete/holder.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/enquete/lr-maskvalid.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/enquete/lr-passconfirm.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/enquete/lr-phonevalidation.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/enquete/lr-cpfvalidation.min.js'); ?>" type="text/javascript"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>

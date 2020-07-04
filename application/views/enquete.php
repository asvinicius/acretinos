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

        <title>Participe</title>

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
			Com a atual situação do Brasil em meio à pandemia de coronavírus, temos ciência de que a situação financeira de
			boa parte das pessoas não está nada boa. 
			Levando em conta que as competições da Liga Acretinos tem suas premiações baseadas no valor da inscrição e no
			número de inscritos, gostaríamos de saber a opinião de vocês em relação especificamente à <strong>Liga Clássica</strong>:
		</p>
        <p class="lead">
			Na sua opinião, é mais interessante o valor da inscrição se manter em R$ 100,00, assim como na temporada passada, ou ser atualizado para R$ 150,00,
			possibilitando uma premiação melhor?
		</p>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4 class="mb-3">Forneça seus dados e responda</h4>
          <form class="needs-validation" action="<?= base_url('enquete/enviar'); ?>" method="post" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" placeholder="Nome" id="nomeparticipante" name="nomeparticipante"  class="form-control" onkeypress="charMask();" required>
                <div class="invalid-feedback">
					É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" placeholder="CPF" id="validatecpf" name="cpfparticipante"  class="form-control" onblur="ValidatesCPF(this)" onkeyup="CPFMask(this);" onkeypress="integerMask();" maxlength="14" required>
                <small class="text-muted">Somente será computado 1 voto por CPF</small>
				<div class="invalid-feedback">
					É obrigatório inserir um número de CPF válido.
                </div>
              </div>
            </div>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="opt1" name="opcao" type="radio" class="custom-control-input" value="0" required>
                <label class="custom-control-label" for="opt1">Prefiro R$ 100,00 pois a grana tá curta.</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="opt2" name="opcao" type="radio" class="custom-control-input" value="1" required>
                <label class="custom-control-label" for="opt2">Prefiro R$ 150,00 pois a premiação pode ser melhor.</label>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
          </form>
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

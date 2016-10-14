<!DOCTYPE html >
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css');?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" >
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-mask.js'); ?>"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" ></script>
    <script>
        $(document).ready(function () {
            $("#cep").mask("99999-999");
        })
    </script>


</head>
<body class="imagemIndex">
	<div class="row-fluid col-sm-offset-1">

			<?php
                echo 'Horário Atual:';
				date_default_timezone_set('America/Sao_Paulo');
				$date = date('Y-m-d H:i');
                $nome = $this->session->userdata('usuario_logado');
				echo '<div class="text-primary">' . $date . '</div>';

                echo '<div class="col-sm-offset-10 text-info">' . 'Usuário Logado: '. $nome. '</div>';
			?>

	</div>
	


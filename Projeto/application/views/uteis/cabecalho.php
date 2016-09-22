<!DOCTYPE html >
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css')?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('http://code.jquery.com/jquery-latest.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.1.0.min.js');?>"></script>
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
	


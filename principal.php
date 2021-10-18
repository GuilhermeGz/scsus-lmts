<?php
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//   15/07/2021
//   Rodrigo Silva
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-Type: text/html;  charset=utf-8", true);

require_once('session.php');
require_once('functions.php');
include('sobre.php');
include('config/users.php');

$ap = '';

$filedd = "config/dados_" . $_SESSION['key'] . ".php";
if (!file_exists($filedd)) {
    $cbnome = "Secretaria Municipal de Saúde de Teste";
    $cbend1 = "Avenida Sete de Setembro, número 29387 - Sala 2";
    $cbend2 = "Bairro Matarazzo Caprinio";
    $cbend3 = "CEP 98732-980";
    $cbend4 = "São Matheus do Oeste Mineiro - MG";
    $cbcont1 = "+55 (47) 23432-9384 | +55 (47) 12384-3234";
    $cbcont2 = "contatosaude@saomatheus.gov.br | www.saomatheuspref.gov.br";
    $textodd = "<?php
	\$cbnome = \"" . $cbnome . "\";
	\$cbend1 = \"" . $cbend1 . "\";
	\$cbend2 = \"" . $cbend2 . "\";
	\$cbend3 = \"" . $cbend3 . "\";
	\$cbend4 = \"" . $cbend4 . "\";
	\$cbcont1 = \"" . $cbcont1 . "\";
	\$cbcont2 = \"" . $cbcont2 . "\";
	?>\r\n";
    $fconfig = fopen($filedd, 'w');
    fwrite($fconfig, $textodd);
    fclose($fconfig);
}
$mensagem = '';
if (!file_exists("config/banco_" . $_SESSION['key'] . ".php")) {
    require_once('gv_db.php');
    $mensagem = "
	  <script type=\"text/javascript\">
		$(document).ready(function() {
		  var unique_id = $.gritter.add({
			title: 'ATENÇÃO',
			text: 'Antes de qualquer coisa configure o DB',
			image: 'dist/img/user01.png',
			sticky: true,
			//time: 8000,
			class_name: 'my-sticky-class'
		  });
		  return false;
		});
	  </script>
	";
}
if (date('d') == 10) {
    $mensagem = "
	  <script type=\"text/javascript\">
		$(document).ready(function() {
		  var unique_id = $.gritter.add({
			title: 'Ajuda aí!!',
			text: 'Já fez sua doação hoje para ajudar o projeto? É fácil, é via PIX!',
			image: 'dist/img/userm.jpg',
			sticky: true,
			//time: 8000,
			class_name: 'my-sticky-class'
		  });
		  return false;
		});
	  </script>
	";
}
if (date('d') == 28) {
    $mensagem = "
	  <script type=\"text/javascript\">
		$(document).ready(function() {
		  var unique_id = $.gritter.add({
			title: 'Gostando do projeto?',
			text: 'Não deixe o projeto morrer, ajude, é simples, qualquer valor via PIX',
			image: 'dist/img/userm.jpg',
			sticky: true,
			//time: 8000,
			class_name: 'my-sticky-class'
		  });
		  return false;
		});
	  </script>
	";
}

$file = "config/c_rel_d_" . $_SESSION['key'] . ".php";
if (!file_exists($file)) {
    require_once('gv_diabeticos.php');
}
$file = "config/c_rel_v_" . $_SESSION['key'] . ".php";
if (!file_exists($file)) {
    require_once('gv_vacinas.php');
}
$file = "config/c_rel_g_" . $_SESSION['key'] . ".php";
if (!file_exists($file)) {
    require_once('gv_gestantes.php');
}
$file = "config/c_rel_h_" . $_SESSION['key'] . ".php";
if (!file_exists($file)) {
    require_once('gv_hipertensos.php');
}
$file = "config/c_rel_m_" . $_SESSION['key'] . ".php";
if (!file_exists($file)) {
    require_once('gv_mulheres.php');
}

$fdash = 'dash_ind.php';
if (date('Ymd') > datasomadias($dtinstall, 5)) {
    $fdash = 'dash_pat.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $sobre['nome']; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap css -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Gritter -->
    <link rel="stylesheet" href="plugins/gritter/css/jquery.gritter.css"/>
    <!-- scSUS -->
    <link rel="stylesheet" href="plugins/scsus/temas/<?php echo $_SESSION['tema']; ?>/css/rel.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <style>
        /*Regra para a animacao*/
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /*Mudando o tamanho do icone de resposta*/
        div.glyphicon {
            color: #6B8E23;
            font-size: 38px;
        }

        /*Classe que mostra a animacao 'spin'*/
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 80px;
            height: 80px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }
    </style>

</head>
<body class="hold-transition sidebar-mini">
<div>
    <?php
    include('navbar.php')
    ?>

    <div id="main-body">
        <?php
        if (strlen($ap) > 0) {
            include($ap);
        } else {
            include($fdash);
        }
        ?>
    </div>
    <footer class="main-footer">
        <?php
        include('footer.php')
        ?>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Gritter -->
<script src="plugins/gritter/js/jquery.gritter.js"></script>
<script src="plugins/gritter/gritter-conf.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>


<?php echo $mensagem; ?>

</body>
</html>

<?php
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//   15/07/2021
//   Rodrigo Silva
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
ini_set('display_errors', 0);
error_reporting(0);

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-Type: text/html;  charset=utf-8", true);
session_start();
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
include('sobre.php');
if (!file_exists("config/users.php")) {
    $codinstall = date('dmYHis') . $sobre['versimp'] . rand(0, 9) . rand(0, 9) . rand(0, 9);
    $texto = "<?php
	\$codinstall = '" . $codinstall . "';
	\$dtinstall = '" . date('Ymd') . "';
	\$sys_log = array();
	\$sys_log[0]['login'] = \"admin\";
	\$sys_log[0]['senha'] = \"123\";
	\$sys_log[0]['perfil'] = \"indicadores\";
	\$sys_log[0]['cnes'] = 0;
	\$sys_log[0]['ine'] = 0;
	\$sys_log[0]['tema'] = \"padrao\";
	?>\r\n";
    $file = "config/users.php";
    if (file_exists($file)) {
        unlink($file);
    }
    $fconfig = fopen($file, 'w');
    fwrite($fconfig, $texto);
    fclose($fconfig);
    $ctrli = 0;
    include 'plugins/ctrli/index.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sc-SUS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<?php
include('header.php');
?>
<div class="content">
    <div>
        <img class="center" src="dist/img/bg-header.png" width="100%" height="200px"
             style="margin-top: -25px; margin-bottom: 0px">
        <img class="center" src="dist/img/prefeitura2.png" width="50%" height="160px"
             style="margin-top: -140px; margin-left: auto">
    </div>

    <div class="container-fluid" style="width: 55%; height: 500px; background-color: white; margin-top: 20px;padding: 0 20px 20px 0; border-radius: 15px;
overflow: hidden; box-shadow: -1px 4px 17px -5px rgba(0,0,0,0.64);
-webkit-box-shadow: -1px 4px 17px -5px rgba(0,0,0,0.64);
-moz-box-shadow: -1px 4px 17px -5px rgba(0,0,0,0.64);">
        <div class="container-fluid">
            <div class="row" style="padding: 0px">
                <div class="col-sm-8 " style="margin-right: 30px; margin-left: 0px; padding: 0px;">
                    <div style="margin-left: 30px; margin-right: 30px;">
                        <img class="center" src="dist/img/atencao_basica.png" width="160px" height="160px"
                             style="margin-top: 15%; margin-bottom: 10px">
                        <h3 style="text-align: center; font-family: 'Arial'; font-size: 23px; font-weight: bolder;margin-bottom: 30px">
                            INDICADORES</h3>
                        <h4 style="text-align: center; color: grey">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Sed sodales, nisi non pharetra gravida, risus nisl fringilla
                            ligula, sed laoreet diam dui nec ipsum. Nulla maximus
                            tristique leo, id interdum ex sagittis sed.</h4>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-right: -100px; ">
                    <div style="margin-top: 60px; margin-bottom: 20px; text-align: center">
                        <h4 style="font-family: Arial"><b>Olá, Seja Bem Vindo(a)!</b></h4>
                    </div>

                    <form method="post" action="check.php" id="formlogin" name="formlogin"
                          onsubmit="return validateForm()" style="width: 100%;">

                        <div class="form-group col-md-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Usuário" name="login" id="login">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-check">
                            <input class="form-control-check-input" type="checkbox" name="remember"
                                   id="remember">

                            <label class="form-check-label" for="remember">
                                Lembrar senha
                            </label>
                        </div>
                        <br>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success btn-block">
                                Entrar
                            </button>
                        </div>
                        <div class="form-group col-md-12">
                            <hr style="margin-top: 0; margin-bottom: 0">
                            <span style="margin-top: 0">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
    $.backstretch("img/login-bg.jpg", {
        speed: 500
    });

    function validateForm() {
        var mensagem = "";
        var submit = true;

        if (document.forms["formlogin"]["login"].value == '') {
            mensagem = mensagem + "Campo 'Usuário' é necessário!<br>";
            submit = false;
        }
        if (document.forms["formlogin"]["senha"].value == '') {
            mensagem = mensagem + "Campo 'Senha' é necessário!<br>";
            submit = false;
        }

        if (!submit) {
            document.getElementById("mensagem").innerHTML = mensagem;
            return false;
        }

    }
</script>
</body>
</html>

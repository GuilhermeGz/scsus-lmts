<?php
?>

<style>
    a, b {
        font-weight: bolder;
        font-family: Arial;
        font-size: 18px;
        color: black;
    }
</style>

<?php
include('header.php')
?>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#" onclick="$('#main-body').load('dash_ind.php')" style="margin-left: -15%">
            <img src="dist/img/atencao_basica.png" width="40px" height="40px">
            <small><b>Indicadores</b></small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="$('#main-body').load('dash_ind.php');return false;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="$('#main-body').load('relatorio.php');return false;">Relatório</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="$('#main-body').load('base_dados.php');return false;">Base de dados</a>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Olá, <b>Admin</b>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"
                           onclick="$('#main-body').load('config.php');return false;">
                            <i class="fas fa-tools"></i> Configurações
                        </a>
                        <a class="dropdown-item" href="exit.php">
                            <i class="fas fa-sign-out-alt"></i> Sair do sistema
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>


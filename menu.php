<?php
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//   15/07/2021
//   Rodrigo Silva
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

require_once('session.php');
$sw_db = "?";
if (file_exists("config/banco_" . $_SESSION['key'] . ".php")) {
    require_once("config/banco_" . $_SESSION['key'] . ".php");
    $sw_db = $dbdb;
}
?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/scsuslogo.png" alt="scSUS Logo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="$('#main-body').load('pg_sobre.php');return false;" class="nav-link">
                <p>
                    Sobre
                </p>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/scsuslogo.png" alt="sc-SUS Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $sobre['nome']; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo "[" . $_SESSION['key'] . "] " . $_SESSION['login']; ?></a>
            </div>
        </div>
        <div id="main-menu">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('dash_ind.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-bar nav-icon"></i>
                                    <p>Indicadores [Geral]</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('dash_equ.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-bar nav-icon"></i>
                                    <p>Indicadores [Equipe]</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('dash_uni.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-bar nav-icon"></i>
                                    <p>Indicadores [Unidades]</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-baby-carriage"></i>
                            <p>
                                Gestantes
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('prep.php?ap=rel_gestantes');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-line nav-icon text-warning"></i>
                                    <p>Indicadores 1, 2 e 3 <small>[gerar]</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('ver.php?ap=rel_gestantes');return false;"
                                   class="nav-link">
                                    <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                    <p>Indicadores 1, 2 e 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   onclick="$('#main-body').load('frm_filtro.php?ap=rel_gestantes');return false;"
                                   class="nav-link">
                                    <i class="fas fa-filter nav-icon"></i>
                                    <p>Filtro</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('frm_gestantes.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-wrench nav-icon text-info"></i>
                                    <p>Configurações</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-csv"></i>
                                    <p>
                                        CSV
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=gestantes_T');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Gestantes</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=gestantes_C');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Consultas</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=gestantes_P');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Procedimentos</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-female"></i>
                            <p>
                                Mulheres
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('prep.php?ap=rel_mulheres');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-line nav-icon text-warning"></i>
                                    <p>Indicador 4 <small>[gerar]</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('ver.php?ap=rel_mulheres');return false;"
                                   class="nav-link">
                                    <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                    <p>Indicador 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   onclick="$('#main-body').load('frm_filtro.php?ap=rel_mulheres');return false;"
                                   class="nav-link">
                                    <i class="fas fa-filter nav-icon"></i>
                                    <p>Filtro</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('frm_mulheres.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-wrench nav-icon text-info"></i>
                                    <p>Configurações</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-csv"></i>
                                    <p>
                                        CSV
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=mulheres_T');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Mulheres</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=mulheres_P');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Procedimentos</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-stethoscope nav-icon text-danger"></i>
                                    <p>
                                        Exames
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('prep.php?ap=rel_mexames');return false;"
                                           class="nav-link">
                                            <i class="fas fa-stethoscope nav-icon  text-warning"></i>
                                            <p>Exames <small>[gerar]</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('ver.php?ap=rel_mexames');return false;"
                                           class="nav-link">
                                            <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                            <p>Exames</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('frm_filtro.php?ap=rel_mexames');return false;"
                                           class="nav-link">
                                            <i class="fas fa-filter nav-icon"></i>
                                            <p>Filtro</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-file-csv"></i>
                                            <p>
                                                CSV
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="#"
                                                   onclick="$('#main-body').load('verc.php?ap=mexames_T');return false;"
                                                   class="nav-link">
                                                    <i class="nav-icon fas fa-file-csv"></i>
                                                    <p><small>Mulheres</small></p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#"
                                                   onclick="$('#main-body').load('verc.php?ap=mexames_P');return false;"
                                                   class="nav-link">
                                                    <i class="nav-icon fas fa-file-csv"></i>
                                                    <p><small>Procedimentos</small></p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-flask"></i>
                            <p>
                                Vacinas
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('prep.php?ap=rel_criancas');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-line nav-icon text-warning"></i>
                                    <p>Indicador 5 <small>[gerar]</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('ver.php?ap=rel_criancas');return false;"
                                   class="nav-link">
                                    <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                    <p>Indicador 5</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   onclick="$('#main-body').load('frm_filtro.php?ap=rel_criancas');return false;"
                                   class="nav-link">
                                    <i class="fas fa-filter nav-icon"></i>
                                    <p>Filtro</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('frm_vacinas.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-wrench nav-icon text-info"></i>
                                    <p>Configurações</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-csv"></i>
                                    <p>
                                        CSV
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=criancas_T');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Crianças</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=criancas_V');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Vacinas</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-syringe nav-icon text-danger"></i>
                                    <p>
                                        Vacinas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('prep.php?ap=rel_vacinas');return false;"
                                           class="nav-link">
                                            <i class="fas fa-syringe nav-icon  text-warning"></i>
                                            <p>Vacinas <small>[gerar]</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('ver.php?ap=rel_vacinas');return false;"
                                           class="nav-link">
                                            <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                            <p>Vacinas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('frm_filtro.php?ap=rel_vacinas');return false;"
                                           class="nav-link">
                                            <i class="fas fa-filter nav-icon"></i>
                                            <p>Filtro</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-file-csv"></i>
                                            <p>
                                                CSV
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="#"
                                                   onclick="$('#main-body').load('verc.php?ap=vacinados_T');return false;"
                                                   class="nav-link">
                                                    <i class="nav-icon fas fa-file-csv"></i>
                                                    <p><small>Vacinados</small></p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#"
                                                   onclick="$('#main-body').load('verc.php?ap=vacinados_V');return false;"
                                                   class="nav-link">
                                                    <i class="nav-icon fas fa-file-csv"></i>
                                                    <p><small>Vacinas</small></p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-bacterium text-danger"></i>
                                    <p>
                                        COVID-19
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('prep.php?ap=rel_covid1');return false;"
                                           class="nav-link">
                                            <i class="fas fa-bacterium nav-icon text-warning"></i>
                                            <p><small>Transparência [gerar]</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('ver.php?ap=rel_covid1');return false;"
                                           class="nav-link">
                                            <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                            <p>Transparência</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" onclick="$('#main-body').load('verc.php?ap=covid_T');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Transparência</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-heartbeat"></i>
                            <p>
                                Hipertensos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('prep.php?ap=rel_hipertensos');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-line nav-icon text-warning"></i>
                                    <p>Indicador 6 <small>[gerar]</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('ver.php?ap=rel_hipertensos');return false;"
                                   class="nav-link">
                                    <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                    <p>Indicador 6</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   onclick="$('#main-body').load('frm_filtro.php?ap=rel_hipertensos');return false;"
                                   class="nav-link">
                                    <i class="fas fa-filter nav-icon"></i>
                                    <p>Filtro</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('frm_hipertensos.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-wrench nav-icon text-info"></i>
                                    <p>Configurações</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-csv"></i>
                                    <p>
                                        CSV
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=hipertensos_T');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Hipertensos</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=hipertensos_C');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Consultas</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=hipertensos_P');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Procedimentos</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tint"></i>
                            <p>
                                Diabéticos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('prep.php?ap=rel_diabeticos');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-line nav-icon text-warning"></i>
                                    <p>Indicador 7 <small>[gerar]</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('ver.php?ap=rel_diabeticos');return false;"
                                   class="nav-link">
                                    <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                    <p>Indicador 7</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   onclick="$('#main-body').load('frm_filtro.php?ap=rel_diabeticos');return false;"
                                   class="nav-link">
                                    <i class="fas fa-filter nav-icon"></i>
                                    <p>Filtro</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('frm_diabeticos.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-wrench nav-icon text-info"></i>
                                    <p>Configurações</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-csv"></i>
                                    <p>
                                        CSV
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=diabeticos_T');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Diabéticos</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=diabeticos_C');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Consultas</small></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"
                                           onclick="$('#main-body').load('verc.php?ap=diabeticos_P');return false;"
                                           class="nav-link">
                                            <i class="fas fa-file-csv nav-icon"></i>
                                            <p><small>Procedimentos</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">Geral</li>
                    <li class="nav-item">
                        <a href="#" onclick="$('#main-body').load('frm_db.php');return false;" class="nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                DB
                                <span class="badge badge-info right"><?php echo $sw_db; ?></span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="$('#main-body').load('frm_dados.php');return false;" class="nav-link">
                            <i class="nav-icon fas fa-tools"></i>
                            <p>
                                Configurações
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="$('#main-body').load('frm_xml.php');return false;" class="nav-link">
                            <i class="nav-icon fas fa-upload"></i>
                            <p>
                                XML CNES
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="$('#main-body').load('pg_sobre.php');return false;" class="nav-link">
                            <i class="nav-icon fas fa-grin"></i>
                            <p>
                                Sobre
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Outros relatórios</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-people-arrows"></i>
                            <p>
                                Duplicados
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('prep.php?ap=rel_duplicados');return false;"
                                   class="nav-link">
                                    <i class="fas fa-chart-line nav-icon text-warning"></i>
                                    <p>Duplicados <small>[gerar]</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('ver.php?ap=rel_duplicados');return false;"
                                   class="nav-link">
                                    <i class="fas fa-fighter-jet nav-icon text-info"></i>
                                    <p>Duplicados</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('frm_duplicados.php');return false;"
                                   class="nav-link">
                                    <i class="fas fa-wrench nav-icon text-info"></i>
                                    <p>Configurações</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" onclick="$('#main-body').load('verc.php?ap=duplicados_T');return false;"
                                   class="nav-link">
                                    <i class="fas fa-file-csv nav-icon"></i>
                                    <p>Duplicados</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="exit.php" class="nav-link">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                SAIR
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>

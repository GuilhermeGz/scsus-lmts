<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }

    small {
        color: grey;
    }
</style>
<div class="shadow p-3 mb-2 bg-white rounded">

    <div class="row">
        <div class="col-sm-6">
            <span style="text-align: left; color: #04467c; font-family: Arial; font-weight: bold; font-size: 24px">Configurações</span>
        </div>
    </div>

    <hr width="99%" style="margin-bottom: 0px">

    <div class="row" style="margin-top: 0px">
        <div class="col-md-2 border-right">
            <a class="nav-link" href="#" onclick="$('#config-body').load('frm_dados.php');return false;"><i
                        class="fas fa-tools"></i> Geral</a>
            <a class="nav-link" href="#" onclick="$('#config-body').load('frm_db.php');return false;"><i
                        class="fas fa-database"></i> Base de dados</a>
            <a href="#" onclick="$('#config-body').load('frm_xml.php');return false;" class="nav-link"><i
                        class="nav-icon fas fa-upload"></i> XML CNES</a>
            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="fas fa-chart-bar"></i> Relatórios</a></span>
                    <ul class="nested">
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_gestantes.php');return false;">
                                <i class="fas fa-baby-carriage"></i>
                                Gestantes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_mulheres.php');return false;">
                                <i class="fas fa-female"></i>
                                Mulheres
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_vacinas.php');return false;">
                                <i class="nav-icon fas fa-flask"></i>
                                Vacinas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_hipertensos.php');return false;">
                                <i class="nav-icon fas fa-heartbeat"></i>
                                Hipertensos
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_diabeticos.php');return false;">
                                <i class="nav-icon fas fa-tint"></i>
                                Diabéticos
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_duplicados.php');return false;">
                                <i class="nav-icon fas fa-people-arrows"></i>
                                Duplicados
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="fas fa-filter nav-icon"></i> Filtros</a></span>
                    <ul class="nested">
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_filtro.php?ap=rel_gestantes');return false;">
                                <i class="fas fa-baby-carriage"></i>
                                Gestantes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_filtro.php?ap=rel_mulheres');return false;">
                                <i class="fas fa-female"></i>
                                Mulheres
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_filtro.php?ap=rel_mexames');return false;">
                                <i class="nav-icon fas fa-flask"></i>
                                Exames
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_filtro.php?ap=rel_vacinas');return false;">
                                <i class="nav-icon fas fa-flask"></i>
                                Vacinas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_filtro.php?ap=rel_hipertensos');return false;">
                                <i class="nav-icon fas fa-heartbeat"></i>
                                Hipertensos
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"
                               onclick="$('#config-body').load('frm_filtro.php?ap=rel_diabeticos');return false;">
                                <i class="nav-icon fas fa-tint"></i>
                                Diabéticos
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-10" id="config-body">
            <div style="margin: 20%"><h2 style="margin-left: 30%">Configurações</h2></div>
        </div>
    </div>


</div>

<style>
    /* Remove default bullets */
    ul, #myUL {
        list-style-type: none;
    }

    /* Remove margins and padding from the parent ul */
    #myUL {
        margin: 0;
        padding: 0;
    }

    /* Style the caret/arrow */
    .caret {
        cursor: pointer;
        user-select: none; /* Prevent text selection */
    }

    /* Create the caret/arrow with a unicode, and style it */
    .caret::after {
        margin-left: 10px;
        content: "\2BC8";
        color: darkblue;
        font-weight: bold;
        display: inline-block;
    }

    /* Rotate the caret/arrow icon when clicked on (using JavaScript) */
    .caret-down::after {
        transform: rotate(90deg);
    }

    /* Hide the nested list */
    .nested {
        display: none;
        margin-left: -20%;
    }

    /* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
    .active {
        display: block;
    }
</style>

<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function () {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>
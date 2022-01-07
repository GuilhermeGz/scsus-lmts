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
            <span style="text-align: left; color: #04467c; font-family: Arial; font-weight: bold; font-size: 24px">Base de Dados - Arquivos CSV</span>
        </div>
    </div>

    <hr width="99%" style="margin-bottom: 0px">

    <div class="row" style="margin-top: 0px">
        <div class="col-md-2 border-right">
            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="fas fa-baby-carriage"></i>
                                Gestantes</a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=gestantes_T');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Gestantes</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=gestantes_C');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Consultas</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=gestantes_P');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Procedimentos</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="fas fa-female"></i>
                                Mulheres</a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=mulheres_T');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Mulheres</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=mulheres_P');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Procedimentos</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="fas fa-stethoscope nav-icon text-danger"></i>
                                        Exames</a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=mexames_T');return false;"
                               class="nav-link">
                                <i class="nav-icon fas fa-file-csv"></i>
                                <small>Mulheres</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=mexames_P');return false;"
                               class="nav-link">
                                <i class="nav-icon fas fa-file-csv"></i>
                                <small>Procedimentos</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="nav-icon fas fa-flask"></i>
                                Vacinas - Indic 5</a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=criancas_T');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Crianças</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=criancas_V');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Vacinas</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="fas fa-syringe nav-icon text-danger"></i>
                                        Vacinas</a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=vacinados_T');return false;"
                               class="nav-link">
                                <i class="nav-icon fas fa-file-csv"></i>
                                <small>Vacinados</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=vacinados_V');return false;"
                               class="nav-link">
                                <i class="nav-icon fas fa-file-csv"></i>
                                <small>Vacinas</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="nav-icon fas fa-bacterium text-danger"></i>
                                        COVID-19</i></a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#" onclick="$('#base-body').load('verc.php?ap=covid_T');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Transparência</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="nav-icon fas fa-heartbeat"></i>
                                Hipertensos</i></a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=hipertensos_T');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Hipertensos</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=hipertensos_C');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Consultas</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul id="myUL" style="margin-left: 17px">
                <li>
                    <span class="caret" style="font-size: large"> <a href="#"><i class="nav-icon fas fa-tint"></i>
                                Diabéticos</i></a></span>
                    <ul class="nested">
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=diabeticos_T');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Diabéticos</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               onclick="$('#base-body').load('verc.php?ap=diabeticos_C');return false;"
                               class="nav-link">
                                <i class="fas fa-file-csv nav-icon"></i>
                                <small>Consultas</small>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-10" id="base-body">
            <div style="margin: 20%"><h2 style="margin-left: 30%">Base de Dados</h2></div>
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
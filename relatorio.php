<?php
?>
<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }

    small {
        color: grey;
    }
</style>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 shadow p-3 mb-5 bg-white rounded" style="margin-top: 4%;">
        <div class="row">
            <div class="col-sm-6">
                <span style="text-align: left; color: #04467c; font-family: Arial; font-weight: bold; font-size: 24px">Relatórios</span>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        style="float: right; color: white; background-color: #ff555b; margin-right: 1%;">Gerar Relátorio
                </button>
            </div>
        </div>

        <hr width="99%">
        <div class="row">
            <table class="table center shadow-sm p-3 mb-5 bg-white rounded" style="width: 96%;">
                <thead class="shadow p-3 mb-5 bg-white rounded">
                <tr style="">
                    <th scope="col">Relatório</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Indicador Geral</td>
                    <td>04/10/2021</td>
                    <td><a href="#" onclick="$('#main-body').load('dash_ind.php');return false;"
                           class="nav-link">
                            <i class="fas fa-chart-bar nav-icon"></i>
                        </a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td></td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">GERAR RELATÓRIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div style="margin: 3%">
                                <h3>Período de análise</h3>
                                <small>O Lorem Ipsum é um texto modelo da indústria
                                    tipográfica e de impressão. O Lorem Ipsum tem vindo a
                                    ser o texto padrão usado por estas indústrias desde o ano
                                    de 1500, quando uma misturou os caracteres de um texto
                                    para criar um espécime de livro.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check" style="margin: 3%">
                            <input class="form-check-input" type="checkbox" id="quadrAno" name="quadrAno">
                            <label class="form-check-label" for="quadrAno">
                                Quadrimestre e ano
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-select" aria-label="Default select example" style="height: 35px">
                                    <option selected disabled hidden>Selecione o quadrimestre
                                    </option>
                                    <option value="1">Janeiro à Abril</option>
                                    <option value="2">Maio à Agosto</option>
                                    <option value="3">Setembro à Dezembro</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="datepicker" id="datepicker"
                                       placeholder="Digite o ano">
                            </div>
                        </div>

                        <div class="form-check" style="margin: 3%">
                            <input class="form-check-input" type="checkbox" id="quadrAno" name="quadrAno">
                            <label class="form-check-label" for="quadrAno">
                                Início e fim
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="dataInicio"
                                       placeholder="Digite a data do início">
                            </div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="dataFim"
                                       placeholder="Digite a data do fim">
                            </div>
                        </div>

                    </div>
                </div>

                <hr style="width: 98%">

                <div class="row">
                    <div class="col-md-6">
                        <div style="margin: 3%">
                            <h3>Indicadores</h3>
                            <small>O Lorem Ipsum é um texto modelo da indústria
                                tipográfica e de impressão. O Lorem Ipsum tem vindo a
                                ser o texto padrão usado por estas indústrias desde o ano
                                de 1500, quando uma misturou os caracteres de um texto
                                para criar um espécime de livro.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row" style="margin-top: 10%">
                            <div class="form-check" style="margin: 3%">
                                <input class="form-check-input" type="checkbox" id="todos" name="todos">
                                <label class="form-check-label" for="todos">
                                    Todos
                                </label>
                            </div>
                            <div class="container col-sm-11" style="border-style: groove; padding-bottom: 5px;">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="indic1" name="indic1">
                                            <label class="form-check-label" for="indic1">
                                                Indicador 1
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="indic2" name="indic2">
                                            <label class="form-check-label" for="indic2">
                                                Indicador 2
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="indic3" name="indic3">
                                            <label class="form-check-label" for="indic3">
                                                Indicador 3
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 style="font-size: 18px">DUM</h4>
                                        <select class="form-select" aria-label="Default select example"
                                                style="height: 35px">
                                            <option selected disabled hidden>--Selecione o DUM--
                                            </option>
                                            <option value="1">Janeiro à Abril</option>
                                            <option value="2">Maio à Agosto</option>
                                            <option value="3">Setembro à Dezembro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>


                            <div class="row" style="margin: 3%" style="border-style: groove">
                                <div class="form-check col-sm-12">
                                    <input class="form-check-input" type="checkbox" id="indic4" name="indic4">
                                    <label class="form-check-label" for="indic4">
                                        Indicador 4
                                    </label>
                                </div>

                                <div class="form-check col-sm-12">
                                    <input class="form-check-input" type="checkbox" id="indic5" name="indic5">
                                    <label class="form-check-label" for="indic5">
                                        Indicador 5
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="container col-sm-11" style="border-style: groove; padding-bottom: 5px;">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="indic6"
                                                   name="indic6">
                                            <label class="form-check-label" for="indic6">
                                                Indicador 6
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 style="font-size: 18px">Parâmetros</h4>
                                        <select class="form-select" aria-label="Default select example"
                                                style="height: 35px">
                                            <option selected disabled hidden>--Selecione o parâmetro--
                                            </option>
                                            <option value="1">Janeiro à Abril</option>
                                            <option value="2">Maio à Agosto</option>
                                            <option value="3">Setembro à Dezembro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>

                        <div class="row" style="margin-top: 3%">
                            <div class="container col-sm-11" style="border-style: groove; padding-bottom: 5px;">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="indic7"
                                                   name="indic7">
                                            <label class="form-check-label" for="indic7">
                                                Indicador 7
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 style="font-size: 18px">Parâmetros</h4>
                                        <select class="form-select" aria-label="Default select example"
                                                style="height: 35px">
                                            <option selected disabled hidden>--Selecione o parâmetro--
                                            </option>
                                            <option value="1">Janeiro à Abril</option>
                                            <option value="2">Maio à Agosto</option>
                                            <option value="3">Setembro à Dezembro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Gerar</button>
            </div>
        </div>
    </div>
</div>


<script>
    $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true //to close picker once year is selected
    });


</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
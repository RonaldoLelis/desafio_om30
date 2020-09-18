<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .panel-heading {
        background-color: #8B2237;
    }

    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information>tbody>tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information>tbody>tr:first-child {
        border-top: 0;
    }

    .table-user-information>tbody>tr>td {
        border-top: 0;
    }
</style>
<br><br>
<div class="container">
    <div class="well col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">

        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar Dados do Paciente</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <!--div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle" src="assets/fotos_paciente/padrao.jpg" alt="Foto paciente">
                            </div>
                            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                <img class="img-circle" src="assets/fotos_pacientes/padrao.jpg" alt="Foto paciente">
                            </div-->
                            <div class="col-md-12 col-lg-12 hidden-xs hidden-sm">
                                <form action="<?php base_url() ?>pacientescadastro/editar/" method="POST" id='form-paciente' enctype='multipart/form-data'>

                                    <!--div class="row">
                                        <label for="nome">Selecionar Foto</label>
                                        <div class="col-md-3">
                                            <a href="#" class="thumbnail">
                                                <img src="assets/fotos_pacientes/<-?php echo isset($pacientes) ? $pacientes['foto'] : '' ?>" height="190" width="150" id="foto-paciente">
                                            </a>
                                        </div>
                                        <input type="file" name="foto" id="foto" value="foto">
                                    </div--></br>

                                    <div class="form-group">
                                        <label for="nome">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($pacientes) ? $pacientes['nome'] : '' ?>" placeholder="Infome o nome completo do Paciente">
                                        <span class='msg-erro msg-nome'></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($pacientes) ? $pacientes['email'] : '' ?>" placeholder="Informe o E-mail">
                                        <span class='msg-erro msg-email'></span>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" maxlength="15" name="cpf" value="<?php echo isset($pacientes) ? $pacientes['cpf'] : '' ?>" placeholder="Informe o CPF">
                                            <span class='msg-erro msg-cpf'></span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="cns">Cartão Nacional de Saúde</label>
                                            <input type="text" class="form-control" id="cartao_cns" maxlength="15" name="cartao_cns" value="<?php echo isset($pacientes) ? $pacientes['cartao_cns'] : '' ?>" placeholder="Informe o CNS">
                                            <span class='msg-erro msg-cns'></span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="data_nascimento">Data de Nascimento</label>
                                            <input type="text" class="form-control" id="data_nascimento" maxlength="10" name="data_nascimento" value="<?php echo isset($pacientes) ? $pacientes['data_nascimento'] : '' ?>">
                                            <span class='msg-erro msg-data'></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="telefone">Telefone</label>
                                            <input type="text" class="form-control" id="telefone" maxlength="12" name="telefone" value="<?php echo isset($pacientes) ? $pacientes['telefone'] : '' ?>" placeholder="Informe o telefone">
                                            <span class='msg-erro msg-telefone'></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="celular">Celular</label>
                                            <input type="text" class="form-control" id="celular" maxlength="14" name="celular" value="<?php echo isset($pacientes) ? $pacientes['celular'] : '' ?>" placeholder="Informe o celular">
                                            <span class='msg-erro msg-celular'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome_mae">Nome da mãe</label>
                                        <input type="text" class="form-control" id="nome_mae" name="nome_mae" value="<?php echo isset($pacientes) ? $pacientes['nome_mae'] : '' ?>" placeholder="Infome o nome completo da Mãe">
                                        <span class='msg-erro msg-nome_mae'></span>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="cep">CEP</label>
                                            <input class="form-control" id="cep" type="number" value="<?php echo isset($pacientes) ? $pacientes['cep'] : '' ?>" placeholder="somente números" name="cep" maxlength="8" required>
                                            <span class='msg-erro msg-cep'></span>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="endereco">Endereço</label>
                                            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo isset($pacientes) ? $pacientes['endereco'] : '' ?>" placeholder="">
                                            <span class='msg-erro msg-endereco'></span>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="numero">Número</label>
                                            <input type="text" class="form-control" id="numero" maxlength="15" name="numero" value="<?php echo isset($pacientes) ? $pacientes['numero'] : '' ?>" placeholder="Informe o número">
                                            <span class='msg-erro msg-numero'></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" maxlength="75" name="bairro" value="<?php echo isset($pacientes) ? $pacientes['bairro'] : '' ?>" placeholder="">
                                            <span class='msg-erro msg-bairro'></span>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" class="form-control" id="cidade" maxlength="36" name="cidade" value="<?php echo isset($pacientes) ? $pacientes['cidade'] : '' ?>" placeholder="">
                                            <span class='msg-erro msg-cidade'></span>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="estado">Estado</label>
                                            <input type="text" class="form-control" id="estado" maxlength="15" name="estado" value="<?php echo isset($pacientes) ? $pacientes['estado'] : '' ?>" placeholder="">
                                            <span class='msg-erro msg-estado'></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="">Selecione o Status</option>
                                            <option value="Ativo">Ativo</option>
                                            <option value="Inativo">Inativo</option>
                                        </select>
                                        <span class='msg-erro msg-status'></span>
                                    </div>

                                    <input type="hidden" id="inputHidden" name="id" value="<?php echo $pacientes['id'] ?>">
                                    <button type="submit" class="btn btn-primary">
                                        Gravar
                                    </button>
                                    <a href='#' class="btn btn-danger">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="<?php echo base_url('pacientes') ?>"><button class="btn btn-sm btn-primary" type="button" data-toggle="tooltip" data-original-title="Send message to user"><i class="glyphicon glyphicon-arrow-left"></i></button></a>
                        <span class="pull-right">
                            <!--button class="btn btn-sm btn-warning" type="button" data-toggle="tooltip" data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button-->
                            <a href="<?php echo base_url('pacientes') ?>" class="btn btn-sm btn-danger" type="button" data-toggle="tooltip" data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
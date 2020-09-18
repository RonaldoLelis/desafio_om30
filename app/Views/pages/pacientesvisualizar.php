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
                        <h3 class="panel-title">Informações do Paciente</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle" src="assets/fotos_pacientes/<?php echo $pacientes['foto'] ?>" alt="Foto paciente">
                            </div>
                            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                <img class="img-circle" src="assets/fotos_pacientes/<?php echo $pacientes['foto'] ?>" alt="Foto paciente">
                            </div>
                            <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                <dl>
                                    <dt>Nome:</dt>
                                    <td><?php echo isset($pacientes) ? $pacientes['nome'] : '' ?></td>
                                    <dd>Email:</dd>
                                    <td><?php echo isset($pacientes) ? $pacientes['email'] : '' ?></td>
                                    <dt>Telefone:</dt>
                                    <td><?php echo isset($pacientes) ? $pacientes['telefone'] : '' ?></td>
                                    <dd>Celular:</dd>
                                    <td><?php echo isset($pacientes) ? $pacientes['celular'] : '' ?></td>
                                    <dt>Status</dt>
                                    <td><?php echo isset($pacientes) ? $pacientes['status'] : '' ?></td>

                                </dl>
                            </div>
                            <div class="col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>ID:</td>
                                            <td><strong><?php echo isset($pacientes) ? $pacientes['id'] : '' ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Nome:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['nome'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['email'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>CPF:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['cpf'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Cartão CNS:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['cartao_cns'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Data de Nascimento:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['data_nascimento'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Telefone:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['telefone'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Celular:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['celular'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nome da Mãe:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['nome_mae'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>CEP:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['cep'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Endereço:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['endereco'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Número:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['numero'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bairro:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['bairro'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Cidade:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['cidade'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Estado:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['estado'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status:</td>
                                            <td><?php echo isset($pacientes) ? $pacientes['status'] : '' ?></td>
                                        </tr>
                                    </tbody>
                                </table>
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
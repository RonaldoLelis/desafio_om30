<?php echo $this->include('pages/pacientes_header'); ?>
<?php echo $this->include('pages/pacientes_nav-bar'); ?>
<script src="assets/js/busca-cep.js"></script>
<h3>Cadastrar</h3>
<hr>

<main class="pt-5 mx-lg-10">
    <div class="container-fluid mt-10">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="#" target="_blank"></a>
                    <span>
                        <h3>Formulário - Cadastro de Paciente</h3>
                    </span>
                </h4>

            </div>

        </div>
        <!-- Heading -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2"></h1>
            </div>
            <div class='container-fluid'>
                <fieldset>
                    <?php if (isset($pacientes)) : ?>
                        <form action="<?php base_url() ?>pacientescadastro/editar/<?= $pacientes['id'] ?>" method="POST" id='form-paciente' enctype='multipart/form-data'>
                        <?php else : ?>
                            <form action="<?php base_url() ?>pacientescadastro/store" method="POST" id='form-paciente' enctype='multipart/form-data'>
                            <?php endif; ?>
                            <div class="row">
                                <label for="nome">Selecionar Foto</label>
                                <div class="col-md-3">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/fotos_pacientes/padrao.jpg" height="190" width="150" id="foto-paciente">
                                    </a>
                                </div>
                                <input type="file" name="foto" id="foto" value="<?php echo isset($pacientes) ? $pacientes['foto'] : '' ?>">
                            </div></br>

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
                                    <input type="text" class="form-control" id="cpf" maxlength="14" name="cpf" value="<?php echo isset($pacientes) ? $pacientes['cpf'] : '' ?>" placeholder="Informe o CPF">
                                    <span class='msg-erro msg-cpf'></span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cns">Cartão Nacional de Saúde</label>
                                    <input type="text" onChange="validaCNS(this.value)" class="form-control" id="cartao_cns" maxlength="18" name="cartao_cns" value="<?php echo isset($pacientes) ? $pacientes['cartao_cns'] : '' ?>" placeholder="Informe o CNS">
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
                                    <input type="text" class="form-control" id="celular" maxlength="13" name="celular" value="<?php echo isset($pacientes) ? $pacientes['celular'] : '' ?>" placeholder="Informe o celular">
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

                            <input type="hidden" name="id" value="<?php echo isset($pacientes) ? $pacientes['id'] : '' ?>">
                            <button type="submit" class="btn btn-primary">
                                Gravar
                            </button>
                            <a href='#' class="btn btn-danger">Cancelar</a>
                            </form>
                </fieldset>
            </div>
        </main>
    </div>
    <div class="row">

        <hr>

    </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/validacns.js"></script>

    <?php echo $this->include('pages/pacientes_footer'); ?>
<?php echo $this->include('pages/pacientes_header'); ?>
<?php echo $this->include('pages/pacientes_nav-bar'); ?>

<script>
    function Confirma() {
        if (!confirm("Deseja mesmo excluir?")) {
            return false;
        }
        return true;
    }
</script>


<h3>Lista de Pacientes</h3>
<hr>
<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="#" target="_blank"></a>
                    <span>Lista de Pacientes</span>
                </h4>

                <form class="d-flex justify-content-center">
                    <!-- Default input -->
                    <input type="search" placeholder="Pesquisar Paciente" aria-label="Search" class="form-control">
                    <button class="btn btn-sm my-0 p" type="submit">
                        <i class="fas fa-search"></i>
                    </button>

                </form>

            </div>

        </div>
        <!-- Heading -->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-12">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <!-- Table  -->
                        <table class="table table-hover">
                            <?php if (!empty($pacientes)) : ?>
                                <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nome</th>
                                        <th>Celular</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <?php foreach ($pacientes as $paciente) : ?>
                                        <tr>
                                            <!--th scope="row">1</th-->
                                            <td><?php echo $paciente['id'] ?></td>
                                            <td><img src="assets/fotos_pacientes/<?php echo $paciente['foto'] ?>" height='40' width='40'></td>
                                            <td><?php echo $paciente['nome'] ?></td>
                                            <td><?php echo $paciente['celular'] ?></td>
                                            <td><?php echo $paciente['status'] ?></td>
                                            <td>
                                                <a href="<?php echo base_url('pacientesvisualizar/visualizar/' . $paciente['id']) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye text-white" aria-hidden="true"></i></a>
                                                <a href="<?php echo base_url('pacienteseditar/editar/' . $paciente['id']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil text-white" aria-hidden="true"></i></a>
                                                <a href="<?php echo base_url('pacientescadastro/delete/' . $paciente['id']) ?>" onClick="return Confirma()" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!-- Table body -->
                        </table>
                        <!-- Table  -->
                    <?php else : ?>

                        <!-- Mensagem caso não exista pacientes cadastrados  -->
                        <h3 class="text-center text-primary">Não existem pacientes cadastrados!</h3>
                    <?php endif; ?>

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>

    </div>

</main>
<!--Main layout-->
<?php echo $this->include('pages/pacientes_footer'); ?>
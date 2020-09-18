 <!--Main Navigation-->
 <!-- SCRIPTS -->
 <!-- JQuery -->
 <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="assets/js/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap.js"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="assets/js/mdb.min.js"></script>
 <!-- Initializations -->
 <script type="text/javascript">
     // Animations initialization
     new WOW().init();
 </script>
 <header>

     <!-- Navbar -->
     <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar" style="background-color: #f29bac">
         <div class="container-fluid">

             <!-- Brand -->
             <a class="navbar-brand waves-effect" href="#" target="_blank">
                 <strong class="blue-text">Medi_OM30</strong>
             </a>

             <!-- Collapse -->
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <!-- Links -->
             <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 <!-- Left -->
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">

                     </li>
                     <li class="nav-item">

                     </li>
                     <li class="nav-item">

                     </li>
                     <li class="nav-item">

                     </li>
                 </ul>

                 <!-- Right -->
                 <ul class="navbar-nav nav-flex-icons">
                     <li class="nav-item">

                     </li>
                     <li class="nav-item">

                     </li>
                     <li class="nav-item">

                     </li>
                 </ul>

             </div>

         </div>
     </nav>
     <!-- Navbar -->

     <!-- Sidebar -->
     <div class="sidebar-fixed position-fixed">

         <a class="logo-wrapper waves-effect">
             <img src="assets/images/mediOM-logo.png" class="img-fluid" alt="">
         </a>

         <div class="list-group list-group-flush">
             <a href="#" class="list-group-item active waves-effect">
                 <i class="fas fa-chart-pie mr-3"></i>Dashboard
             </a>
             <a href="<?php echo base_url('pacientes') ?>" class="list-group-item list-group-item-action waves-effect">
                 <i class="fas fa-user mr-3"></i>Pacientes</a>
             <a href="<?php echo base_url('pacientescadastro') ?>" class="list-group-item list-group-item-action waves-effect">
                 <i class="fas fa-list mr-3"></i>Cadastrar</a>
             <a href="<?php echo base_url('usuarios') ?>" class="list-group-item list-group-item-action waves-effect">
                 <i class="fas fa-users mr-3"></i>Usuários</a>
             <!--a href="#" class="list-group-item list-group-item-action waves-effect">
                 <i class="fas fa-money-bill-alt mr-3"></i></a-->
         </div>

     </div>
     <!-- Sidebar -->

 </header>
 <!--Main Navigation-->
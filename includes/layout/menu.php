<?php

use \App\Session\Login;

$usuariologado = Login::getUsuarioLogado();
$usuario = $usuariologado['nome'];
$acesso = $usuariologado['acessos_id'];

?>
<aside class="main-sidebar sidebar-dark-purple elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Fluxo de Caixa</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../assets/dist/img/masculino-1.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $usuario ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">


            </li>

           

          </ul>
        </li>

        <!-- ADMINISTATIVO -->

        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="fas fa-dot-circle"></i>
            <p>
              Administrativo
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item" style="display:<?php

                                                switch ($acesso) {
                                                  case '2':
                                                    echo "none";
                                                    break;
                                                  case '3':
                                                    echo "none";
                                                    break;
                                                  case '4':
                                                    echo "";
                                                    break;

                                                  default:
                                                    echo "";
                                                    break;
                                                }

                                                ?>">
              <a href="../../pages/acessos/acesso-list.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Acessos</p>
              </a>
            </li>

         

            <li class="nav-item" style="display:<?php

                                                switch ($acesso) {
                                                  case '2':
                                                    echo "none";
                                                    break;
                                                  case '3':
                                                    echo "none";
                                                    break;
                                                  case '4':
                                                    echo "none";
                                                    break;

                                                  default:
                                                    echo "";
                                                    break;
                                                }

                                                ?>">
              <a href="../../pages/cargos/cargo-list.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cargos</p>
              </a>
            </li>



            <li class="nav-item" style="display:<?php

                                                switch ($acesso) {
                                                  case '2':
                                                    echo "none";
                                                    break;
                                                  case '3':
                                                    echo "none";
                                                    break;
                                                  case '4':
                                                    echo "none";
                                                    break;

                                                  default:
                                                    echo "";
                                                    break;
                                                }

                                                ?>">
              <a href="../../pages/usuarios/usuario-list.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuários</p>
              </a>
            </li>

          </ul>

        </li>

        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="fas fa-dot-circle"></i>
            <p>
              Financeiro
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../pages/usuarios/usuario-list.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Movimentação</p>
              </a>
            </li>
          </ul>
        </li>

    </nav>


</aside>
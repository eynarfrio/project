<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
        </div>
        <div class="pull-left info">
          <p>Usuario</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU DE NAVEGACION</li>

        <li>
          <a href="<?php echo $this->Url->build(['controller' => 'Paginas', 'action' => 'index']); ?>">
            <i class="fa fa-th"></i> <span>Formulario</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
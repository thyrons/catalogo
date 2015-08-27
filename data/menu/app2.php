<?php 

if (empty($_SESSION['id'])) {
    header('Location: ../');
}
// pie de pagina
function footer() {
	print' <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="">P&S System</a>.</strong> Todos los derechos reservados.
      </footer>';
}
// banner o cabecera
function banner_1() {
	print'
	<header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo"><b>SISWEB</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">' . $_SESSION['nombres'] . '</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/defaul.png" class="img-circle" alt="User Image" />
                    <p>
                      ' . $_SESSION['nombres'] . '
                    </p>
                  </li>
                                
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="../configuracion" class="btn btn-default btn-flat">Ajustes</a>
                    </div>
                    <div class="pull-right">
                      <a href="../" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
';
}
// menu principal lateral
function menu_lateral_1() {
print'
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <li class="treeview">
              <a href="">
                <i class="fa fa-laptop"></i> <span>Ingresos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../registros_clientes" target="_blank"><i class="fa fa-circle-o"></i> Clientes</a></li>
                <li><a href="../proformas" target="_blank"><i class="fa fa-circle-o"></i> Pedidos</a></li>
              </ul>
            </li>


            <!--<li class="header">Otros.</li>
            <li><a href=""><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href=""><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href=""><i class="fa fa-circle-o text-info"></i> Information</a></li>-->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

	';
}
?>
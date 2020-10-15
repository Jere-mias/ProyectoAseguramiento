<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
   

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

      

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
        <center>
        <!-- Boton estadistica -->
        <div class="btn-group">
        <button type="button" class="btn btn-danger">Estadisticas</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> <span class="sr-only">Desplegar menú</span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{url('home')}}">Ultimas Estadisticas</a></li>
        </ul>
        </div>
        <!-- Boton Inventarios -->
        <div class="btn-group">
        <button type="button" class="btn btn-danger">Inventarios</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> <span class="sr-only">Desplegar menú</span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{url('almacen/categoria')}}">Categorias</a></li>
        <li><a href="{{url('almacen/articulo')}}">Productos</a></li>
        </ul>
        </div>
        <!-- Proveedores -->
        <div class="btn-group">
        <button type="button" class="btn btn-danger">Proveedores</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> <span class="sr-only">Desplegar menú</span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{url('compras/proveedor')}}">Lista de proveedores</a></li>
        <li><a href="{{url('compras/ingreso')}}">Productos Aquiridos</a></li>
        </ul>
        </div>
        <!-- Ventas -->
        <div class="btn-group">
        <button type="button" class="btn btn-danger">Ventas</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> <span class="sr-only">Desplegar menú</span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{url('ventas/venta')}}">Ventas Realizadas</a></li>
        <li><a href="{{url('ventas/cliente')}}">Mis Clientes</a></li>
        </ul>
        </div>

        <!--Boton usuarios -->
        <div class="btn-group">
        <button type="button" class="btn btn-danger">Usuarios</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> <span class="sr-only">Desplegar menú</span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{url('seguridad/usuario')}}">Usuarios Logeados</a></li>
       
        </ul>
        </div>

          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-yellow">Activo(ahora)</small>
                  <span class="hidden-xs">{{Auth::user()->   name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-20">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> </h3>
                  <div class="box-tools pull-right">
                  
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
         
        </div>
       
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>

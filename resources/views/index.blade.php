@extends('welcome')
@section('librerias')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Wuaf - Here !</span></a>
            </div>

            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
                  <li><a href="{{route('Inicio')}}"><i class="fa fa-home"></i> Inicio<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Catalogo de mascotas</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Formularios de Adopcion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('Requisitos')}}">Adoptame</a></li>
     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-map-marker" aria-hidden="true"></i> Localizacion GPS<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Buscar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Mis Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Registros</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('Entrada')}}"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <h3 align="center"><i class="fa fa-paw" aria-hidden="true"></i>  <span style="font-style: italic;">&nbsp;{{Session::get('sesionuser')}} </span> </h3>

              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
              @yield('contenido')
                </div>
              </div>
            </div>
      </div>
    </div>
  </body>
@stop
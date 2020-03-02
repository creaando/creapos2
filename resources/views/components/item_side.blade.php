<?php function activeMenu($url){
    return request()->is($url) ? 'active': '';
}?>

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">SISGestion P&S</li>
{{-- STUB Item de Menú
+======================+
|ELEMENTO 1=> DASHBOARD|
|      "TREEVIEW"      |
+======================+
--}}
    <li class="{{ activeMenu('/') }}">
        <a href="{{ route ('inicio') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>
{{-- STUB Item de Menú
+=======================+
|ELEMENTO 2=> empleados|
|     "TREEVIEW"       |
+======================+
--}}
    <li class="{{ request()->is('empleados', 'empleados/*' ) ? 'active' : '' }}">
        <a href="{{ route('empleados.index') }}">
            <i class="fa fa-id-card"></i>
            <span>Empleados</span>
        </a>
    </li>

{{-- STUB Item de Menú
+=====================+
|ELEMENTO 3=> CLIENTES|
|     "TREEVIEW"      |
+=====================+
--}}
    <li class="{{ request()->is('clientes', 'clientes/*' ) ? 'active' : '' }}">
        <a href="{{ route ('clientes.index') }}">
            <i class="fa fa-address-book"></i>
            <span>Clientes</span>
        </a>
    </li>
{{-- STUB Item de Menú
+======================+
|ELEMENTO 4=> PROYECTOS|
|     "TREEVIEW"       |
+======================+
--}}
    <li class="{{ request()->is('proyectos', 'proyectos/*') ? 'active' : '' }}">
        <a href="{{ route ('proyectos.index') }}">
            <i class="fa fa-briefcase"></i>
            <span>Proyectos</span>
        </a>
    </li>
{{-- STUB Item de Menú
+========================+
|ELEMENTO 5=> ACTIVIDADES|
|       "TREEVIEW"       |
+========================+
--}}
    <li class="{{ activeMenu('tareas') }}">
        <a href="{{ route ('tareas.index') }}">
            <i class="fa fa-calendar"></i>
            <span>Actividades</span>
        </a>
    </li>
{{-- STUB Item de Menú
+=======================+
|ELEMENTO 6=> PARÁMETROS|
|      "TREEVIEW"       |
+=======================+
--}}
    <li class="{{ request()->is('usuarios', 'usuarios/*', 'cargos', 'cargos/*', 'tiempoinversiones', 'tiempoinversiones/*', 'clasificaciones', 'clasificaciones/*', 'propiedadestados', 'propiedadestados/*', 'tipoclientes', 'tipoclientes/*', 'propventas', 'propventas/*', 'referidos', 'referidos/*', 'dispopagos', 'dispopagos/*',  'necesidadesPrim','tiposProyectos','tiposProyectos/*', 'tareatipos', 'tareatipos/*') ? 'active' : '' }} treeview">
        <a href="#">
            <i class="fa fa-wrench"></i>
            <span>Parametros</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        {{-- sub elemento del menu --}}
        <ul class="treeview-menu">
            <li class="{{ activeMenu('usuarios') }}">
                <a href="{{ route('usuarios.index') }}">
                    <i class="fa fa-users"></i>
                    Usuarios
                </a>
            </li>

            <li class="{{ activeMenu('cargos') }}">
                <a href="{{ route('cargos.index') }}">
                    <i class="fa fa-mortar-board"></i>
                    Cargos
                </a>
            </li>

            <li class="{{ activeMenu('tipoclientes') }}">
                <a href="{{ route('tipoclientes.index') }}">
                    <i class="fa fa-check-circle"></i>
                    Estados del cliente
                </a>
            </li>

            <li class="{{ activeMenu('referidos') }}">
                <a href="{{ route('referidos.index') }}">
                    <i class="fa fa-street-view"></i>
                    Referidos
                </a>
            </li>

            {{-- <li class="{{ activeMenu('necesidadesPrim') }}">
                <a href="{{ route ('necesidadesPrim') }}">
                    <i class="fa fa-bullseye"></i>
                    necesidades del cliente
                </a>
            </li> --}}

            {{-- sub elemento interno --}}
            {{-- <li>
                <a href="#">
                    <i class="fa fa-car"></i>
                    otras necesidades
                </a>
            </li> --}}
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('propventas') }}">
                <a href="{{ route('propventas.index') }}">
                    <i class="fa fa-shopping-bag"></i>
                    propiedades negociables
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('dispopagos') }}">
                <a href="{{ route('dispopagos.index') }}">
                    <i class="fa fa-money"></i>
                    Disponibilidad de pago
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('propiedadestados') }}">
                <a href="{{ route('propiedadestados.index') }}">
                    <i class="fa fa-bank"></i>
                    Estados de la propiedad
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('tiempoinversiones') }}">
                <a href="{{ route('tiempoinversiones.index') }}">
                    <i class="fa fa-hourglass-start"></i>
                    tiempos de inversión
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('tiposProyectos') }}">
                <a href="{{ route('tiposProyectos.index') }}">
                    <i class="fa fa-building-o"></i>
                    tipos de proyectos
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('tareatipos') }}">
                <a href="{{ route('tareatipos.index') }}">
                    <i class="fa fa-calendar"></i>
                    tipos de Tareas
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('clasificaciones') }}">
                <a href="{{ route('clasificaciones.index') }}">
                    <i class="fa fa-list"></i>
                    clasificación
                </a>
            </li>
        </ul>
    </li>

</ul>

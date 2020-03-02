@extends('layout')

@section('title')
    Inicio
@endsection


{{-- SECTION  Secciones internas
+==========================================================+
|                      SECCIÓN DONDE                       |
|SE INLUYE EL CONTENIDO AUXILIAR PARA EL USO DE LAS PÁGINAS|
|                   "SECCIONES INTERNAS"                   |
+==========================================================+
--}}

@section('itemSide')
    @include('./components/itemSide')
@endsection



{{-- SECTION  Sección de Modulos
+==========================================================+
|                      SECCIÓN DONDE                       |
|SE INCLUYEN LAS VISTAS O MODULOS QUE COMPONEN EL PRINCIPAL|
|                    SECCIÓN DE MODULOS                    |
+==========================================================+
--}}

@section('navbar')
    @include('./modulos/navbar')
@endsection

@section('sidebar')
    @include('./modulos/sidebar')
@endsection

@section('contenido')
    @include('./contenido/inicio')
@endsection

@section('footer')
    @include('./modulos/footer')
@endsection





<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="panel-heading">
                    <center>REGISTRO DE PERSONAS</center>
                </div>
    <div class="panel-body">
        <!-- Display Validation Errors -->
        <!--@include('commons.errors')-->

        <!-- Formulario de Nueva Persona -->
        <form action="{{ url('persona') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="documento_identidad" class="col-sm-3 control-label">Documento Identidad</label>

                <div class="col-sm-6">
                    <input type="text" name="documento_identidad" id="documento_identidad" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="tipo_documento" class="col-sm-3 control-label">Tipo Documento</label>

                <div class="col-sm-6">
                    <input type="text" name="tipo_documento" id="tipo_documento" class="form-control">
                </div>
            </div>
            <div class="form-group">    
                <label for="nombre" class="col-sm-3 control-label">Nombres</label>

                <div class="col-sm-6">
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="ap_paterno" class="col-sm-3 control-label">Apellido Paterno</label>
                <div class="col-sm-6">
                    <input type="text" name="ap_paterno" id="ap_paterno" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="ap_materno" class="col-sm-3 control-label">Apellido Materno</label>
                <div class="col-sm-6">
                    <input type="text" name="ap_materno" id="ap_materno" class="form-control">
                </div>
            </div>
            <div class="form-group">    
                <label for="telefono" class="col-sm-3 control-label">Telefono</label>
                <div class="col-sm-6">
                    <input type="text" name="telefono" id="telefono" class="form-control">
                </div>
            </div>
            <div class="form-group">    
                <label for="celular" class="col-sm-3 control-label">Celular</label>
                <div class="col-sm-6">
                    <input type="text" name="celular" id="celular" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Registrar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
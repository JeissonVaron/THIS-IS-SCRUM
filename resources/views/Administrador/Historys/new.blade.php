@extends('Administrador.plantillas.admin-nav')

@section('content')
<br>
<div class="container">
<div class="col-lg-11 col-md-offset-">
                        <h1 class="page-header">Historias</h1>
                    </div>
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Historia</div>

                <div class="panel-body">
                    <table class="table table-bordered ">
                    {!! Form::open(['route' => 'Historys.store', 'method' => 'POST']) !!}              
                        <div class="form-group">
                            {!! Form::label('name', 'Objetivo') !!}
                            {!! Form::textarea('objective', null, ['class' =>'form-control', 'requerid', 'placeholder' => 'Objetivo de la historia']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Proyecto') !!}
                            {!! Form::number('fk_project_id', null, ['class' =>'form-control', 'requerid', 'placeholder' => 'Ingrese el proyecto']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Registrar', ['class' =>'btn btn-primary col-md-offset-5']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('proyecto', 'Hola')

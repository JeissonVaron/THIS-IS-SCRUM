@extends('Administrador.plantillas.admin-nav')

@section('content')
<br>
<div class="container">
<div class="col-lg-11 col-md-offset-">
                        <h1 class="page-header">Sprint</h1>
                    </div>
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Sprint</div>

                <div class="panel-body">
                    <table class="table table-bordered ">
                    {!! Form::open(['route' => ['Sprints.store', $Sprint->id], 'method' => 'POST']) !!}              
                        <div class="form-group">
                            {!! Form::label('name', 'Descripcion') !!}
                            {!! Form::textarea('description', $Sprint->description, ['class' =>'form-control', 'requerid', 'placeholder' => 'Escriba la descripcion del sprint']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'Fecha de finalizacion') !!}
                            <input type="datetime-local" name="final_date" value="{{ $Sprint->  final_date}}" class="form-control" required>
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

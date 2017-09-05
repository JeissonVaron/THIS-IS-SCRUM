@extends('layouts.appnav')

@section('content')

@endsection

@section('proyecto', 'Hola')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Tarea</div>

                <div class="panel-body">
                    <table class="table table-bordered ">
                    {!! Form::open(['route' => 'Tasks.store', 'method' => 'POST']) !!}              
                        <div class="form-group">
                            {!! Form::label('name', 'Tarea') !!}
                            {!! Form::text('name', null, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombtr de la tarea']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Descripcion') !!}
                            {!! Form::text('description', null, ['class' =>'form-control', 'requerid', 'placeholder' => 'Ingrese la descripcion de la tarea']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Fecha de inicio') !!}
                            {!! Form::date('initial_date', null, ['class' =>'form-control', 'requerid']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Archivo') !!}
                            {!! Form::file('attachedFile', null, ['class' =>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Comentarios') !!}
                            {!! Form::text('commentary', null, ['class' =>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="fk_profile_id" class="col-md-4 control-label">Fase</label>
                                    <div  class="col-md-6" >
                                    <select id="fk_profile_id"  class="form-control" value="" name="fk_phase_id" required>  
                                    <option value="1">Nueva</option>
                                    <option value="2">Preparada</option>
                                    <option value="3">En progreso</option>
                                    <option value="4">Realizada</option>
                                    <option value="5">Terminada</option>
                                    <option value="6">Necesita informacion </option>
                                    </select>
                                    </div>
                        </div>
                        <div class="form-group">
                            <label for="fk_profile_id" class="col-md-4 control-label">Fase</label>
                                    <div  class="col-md-6" >
                                    <select id="fk_profile_id"  class="form-control" value="" name="fk_priority_id" required>  
                                    <option value="1">Muy alta</option>
                                    <option value="2">Alta</option>
                                    <option value="3">Media</option>
                                    <option value="4">Baja</option>

                                    </select>
                                    </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Historia') !!}
                            {!! Form::number('fk_history_id', null, ['class' =>'form-control', 'requerid']) !!}
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
@extends('layouts.appnav')

@section('content')

@endsection

@section('proyecto', 'Hola')
<br><div class="container">
<div class="col-lg-11 col-md-offset-">
                        <h1 class="page-header">Backlog</h1>
                    </div>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-">
            <div class="panel panel-default">
                <div class="panel-heading">Mi Backlog
    
                <a href="{{ url('Tasks/create')}}" ><button class="btn btn-success col-md-offset-9">Nuevo</button></a></div>

                <div class="panel-body">
                    <table class="table table-bordered ">
                    <tr>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Fecha Inicial</td>
                        <td>Archivo</td>
                        <td>Comentario</td>
                        <td>Encargado</td>
                        <td>Fase</td>
                        <td>Prioridad</td>
                        <td>Historia</td>
                    </tr>
                   <tbody>
                        @foreach ($Tasks as $Tasks )
                        <tr>
                            <td><a href="{{route('Tasks.edit', $Tasks->id)}}">{{ $Tasks->name}}</a></td>
                            <td>{{ $Tasks->description}}</td>
                            <td>{{ $Tasks->initial_date}}</td>
                            <td>
                                @if($Tasks -> attachedFile == null) <span class="label label-danger">Nada</span> 
                                    @else <span class="label label-success">Ya hay algo</span> 
                                @endif
                            </td>
                            <td>{{ $Tasks->commentary}}</td>
                            <td>{{ $Tasks->fk_user_team_id}}</td>
                            <td>
                                @if($Tasks -> fk_phase_id == 1 ) <span class="label label-default">Nueva</span> 
                                    @else @if($Tasks -> fk_phase_id == 2)  <span class="label label-primary">Preparada</span>
                                        @else @if($Tasks -> fk_phase_id == 3)  <span class="label label-warning">En progreso</span>
                                            @else @if($Tasks -> fk_phase_id == 4)  <span class="label label-info">Realizada</span>
                                                @else @if($Tasks -> fk_phase_id == 5)  <span class="label label-success">Terminada</span>
                                                    @else @if($Tasks -> fk_phase_id == 6)  <span class="label label-danger">Necesita informacion</span>
                                @endif
                                @endif
                                @endif
                                @endif
                                @endif
                                @endif

                            </td>
                            <td>
                                @if($Tasks->    fk_priority_id == 1) <span class="label label-warning">Muy alta!</span> 
                                    @else @if($Tasks -> fk_phase_id == 2)  <span class="label label-success">Alta</span>
                                        @else @if($Tasks -> fk_phase_id == 3)  <span class="label label-primary">Media</span>
                                            @else @if($Tasks -> fk_phase_id == 4)  <span class="label label-info">Baja</span>

                                @endif
                                @endif
                                @endif
                                @endif
                                                            </td>
                            <td>{{ $Tasks->fk_history_id}}</td>
                        </tr>
                        @endforeach 
                        </tbody>
                    
                </table>

                </div>
            </div>
        </div>
    </div>
</div>

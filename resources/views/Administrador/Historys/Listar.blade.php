@extends('Administrador.plantillas.admin-nav')

@section('content')
        <br><div class="container">
<div class="col-lg-12 col-md-offset-">
            <h1 class="page-header">Historias</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Mis Historias
                <a href="{{ url('Administrador/Historys/create')}}" ><button class="btn btn-success col-md-offset-9">Nueva</button></a></div>
                <div class="panel-body">
                    <table class="table table-bordered ">
                    <tr>
                        <td>Identificador</td>
                        <td>Objetivo</td>
                        <td>Proyecto</td>
                        <td>Fase</td>
                        <td>Accion</td>
                    </tr>
                   <tbody>
                        @foreach ($Historys as $Historys )
                        <tr>
                            <td>{{ $Historys -> id}}</td>
                            <div class="col-md-4"><td><a href="{{ route('Historys.edit', $Historys->id)}}">{{ $Historys -> objective}}</a></td></div>
                            <td ><p data-toggle="tooltip" data-placement="bottom" title="{{ $Historys -> objective}}">{{ $Historys -> fk_project_id}}</p></td>
                            <td >{{ $Historys -> name}}</td>
                           <td><a href="{{ url('Tasks')}}" class="btn btn-primary"> BackLog</a><a href="{{ url('Criterios')}}" class="btn btn-danger">Criterios</a></td>                          
                        </tr>
                        @endforeach 
                        </tbody>                    
                </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                Sprints 
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Nuevo Sprint!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('Administrador/Sprints/create')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Agregar Sprint</span>
                                        <span class="pull-right"><i class="fa fa-plus fa-2x"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                            @foreach ($Sprint as $Sprints )
            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class=" text-right">
                                        <div class="" >Fecha de iniciacion:</div>
                                            <div class="">{{ $Sprints->initial_date}}</div>
                                            <div class="">Fecha de finalizacion:</div>
                                            <div>{{ $Sprints->final_date}}</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('Sprints.edit', $Sprints->id)}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">{{ $Sprints->description}}</span>
                                        <span class="pull-right"><i class="fa glyphicon-edit fa-2x"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                                 
            @endforeach
            <center>{{ $Sprint->links() }}</center>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
</div>
@endsection

@section('proyecto', 'Hola')

@section('js')
<script >
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
@endsection

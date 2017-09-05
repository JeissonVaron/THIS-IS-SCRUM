@extends('Administrador.plantillas.admin-nav')

@section('content')
<div class="container">
                <div class="col-lg-12 col-md-offset-">
                        <h1 class="page-header">Proyectos</h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Proyectos</a></li>
                        </ol>
                </div>


                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i>  Panel Proyectos</h3>
                        </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                   <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre del proyecto</th>
                                            <th>Descripcion del proyecto</th>
                                            <th>Editar</th>
                                        </tr>
                                        </thead>
                                        <tbody>            
                                            @foreach ($projects as $projects)
                                        <tr>
                                            <td>{{ $projects->id}}</td>
                                            <td class="Actualizar" data-id="{{ $projects->name}}"><a href="{{ url('Administrador/Historys')}}">{{ $projects -> name}}</a></td>
                                            <td class="Actualizar" data-id="{{ $projects->description}}">{{ $projects->description}}</td>
                                            <td><i class="fa fa-fw fa-pencil Actualizar" data-toggle="modal"   data-id="{{ $projects->id}}" data-target="#Editar"></i></td>                            
                                        </tr>
                                            @endforeach 
                                        </tbody>
                                    </table>
                                </div>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Crear"><span class="glyphicon glyphicon-plus"></span>Crear Proyecto</button>

                            <!-- Crear MODAL-->
                            <div id="Crear" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                        <!-- Modal content-->
                                    <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Registro de proyecto</h4>
                                          </div>
                                          <div class="modal-body">


                                        {!! Form::open(['route' => 'projects.store', 'method' => 'POST']) !!}

                                        <div class="form-group">
                                            {!! Form::label('name', 'Nombre') !!}
                                            {!! Form::text('name', null, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::label('name', 'Descripcion') !!}
                                            {!! Form::textarea('description', null, ['class' =>'form-control textarea-description', 'requerid', 'placeholder' => 'Descripcion del proyecto']) !!}
                                        </div>

                                        <div class="modal-footer">
                                            {!! Form::submit('Registrar', ['class' =>'btn btn-success col-md-offset-5']) !!}
                                        </div>

                                        {!! Form::close() !!}
                                        </div>
                                          
                                    </div>
                                </div>
                            </div>


                            <!-- Consultar MODAL--> 

                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#Consultar"><span class="glyphicon glyphicon-search"></span>Consultar Proyecto</button>
                                    <!-- Modal -->
                                    <div id="Consultar" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Consultar proyecto</h4>
                                          </div>
                                          <div class="modal-body">
                                          <label>Codigo de proyecto</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                    <input id="email" type="text" class="form-control" name="email" placeholder="Nombre">
                                                </div><br>

                                                <label>Nombre de proyecto</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                    <textarea id="email" type="text" class="form-control" name="email" placeholder="Descripcion"></textarea>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-search"></span>Buscar</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>


                                    <!-- Actualizar MODAL--> 




                                    <div id="Editar" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Editar proyecto {{ $projects->name}}</h4>
                                          </div>
                                          <div class="modal-body">                                                

                                          {!! Form::open(['route' => ['projects.update', $projects->id_project],  'method' => 'PUT']) !!} 

                                            <div class="form-group">
                                                {!! Form::label('name', 'Codigo de proyecto') !!}
                                                {!! Form::text('name', $projects->id, ['class' =>'form-control', 'requerid','disabled', 'placeholder' => 'Nombre del proyecto', 'id' => 'codigo_proy']) !!}
                                            </div>             
                                            <div class="form-group">
                                                {!! Form::label('name', 'Nombre') !!}
                                                {!! Form::text('name', $projects->name, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto','id' => 'nombre_proy']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('name', 'Descripcion') !!}
                                                {!! Form::textarea('description', $projects->description, ['class' =>'form-control textarea-description', 'requerid', 'placeholder' => 'Descripcion del proyecto','id' => 'descrip_proy']) !!}
                                            </div>
                                            <div class="modal-footer">
                                                {!! Form::submit('Actualizar', ['class' =>'btn btn-primary col-md-offset-5']) !!}
                                            </div>

                                        {!! Form::close() !!}

                                          </div>
                                          
                                        </div>

                                      </div>
                                    </div>



        

        <a href="{{ route('projects.edit', $projects->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Editar</a>     
                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 


@section('js')
 <script type="text/javascript">
                                        
                                        $(document).ready(function(){

                                            $(".Actualizar").on("click", function(){

                                                    $("#codigo_proy").val($(this).attr('data-id'));
                                                    $("#nombre_proy").val($(this).attr('data-id'));
                                                    $("#descrip_proy").val($(this).attr('data-id'));

                                            });
                                        });
                                    </script>
@endsection 




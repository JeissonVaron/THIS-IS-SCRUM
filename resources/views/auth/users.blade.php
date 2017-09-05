@extends('Administrador.plantillas.admin-nav')

@section('content') 
<div class="container">
                <div class="col-lg-12 col-md-offset-">
                        <h1 class="page-header">Usuarios</h1>
                        <ol class="breadcrumb">
                            <li><a href="users">Usuarios</a></li>
                        </ol>
                </div>


                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-group-o fa-fw"></i>  Lista de Usuarios</h3>
                        </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                   <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Identificacion</th>
                                            <th>Nombre</th>
                                            <th>Apellido </th>
                                            <th>Nombre de Usuario</th>
                                            <th>Email</th>
                                            <th>Estado</th>
                                            <th>Prefil</th>
                                            <th>Editar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($user as $users)
                                        <tr>
                                            <td>{{ $users -> id_user}}</td>
                                            <td>{{ $users -> name}}</td>
                                            <td>{{ $users -> last_name}}</td>
                                            <td>{{ $users -> name_user}}</td>
                                            <td>{{ $users -> email}}</td>
                                            <td>
                                                @if($users->fk_state_id != 1) <span class="label label-danger">Inactivo</span> 
                                                @else <span class="label label-success">Activo</span> 
                                                    @endif 
                                            </td>
                                            <td>
                                                @if($users->fk_profile_id != 1)<span class="label label-primary">Administrador</span> 
                                                @else <span class="label label-info">Invitado</span> 
                                                @endif 
                                            </td>
                                            <td>
                                             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Editar"><span class="glyphicon glyphicon-wrench"></span>Editar </button>
                                            </td>
                                            
                                        </tr>
                                        @endforeach 
                                        </tbody> 
                                </table>

                                 <div id="Editar" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Editar usuario {{ $users->name}}{{ $users->last_name}}</h4>
                                          </div>
                                          <div class="modal-body">                                                

                                          {!! Form::open(['route' => ['users.update', $users->id],  'method' => 'PUT']) !!} 

                                            <div class="form-group">
                                                {!! Form::label('name', 'Identificacion') !!}
                                                {!! Form::text('name', $users->id_user, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto']) !!}
                                            </div>            
                                            <div class="form-group">
                                                {!! Form::label('name', 'Nombre') !!}
                                                {!! Form::text('name', $users->name, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('name', 'Apellido') !!}
                                                {!! Form::text('name', $users->last_name, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('name', 'Nombre de usuario') !!}
                                                {!! Form::text('name', $users->name_user, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('name', 'Correo') !!}
                                                {!! Form::text('name', $users->email, ['class' =>'form-control', 'requerid', 'placeholder' => 'Nombre del proyecto']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('states', 'Estado',[ 'class' => 'col-md-4 control-label']) !!}
                                                {!! Form::select('fk_state_id', $states, ['class' => 'form-control select-state ', 'multiple', 'required']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('profiles', 'Perfil',[ 'class' => 'col-md-4 control-label']) !!}
                                                {!! Form::select('fk_profile_id', $profiles, ['class' => 'select-user form-control', 'multiple', 'required']) !!}
                                            </div>
                                            <div class="modal-footer">
                                                {!! Form::submit('Actualizar', ['class' =>'btn btn-primary col-md-offset-5']) !!}
                                            </div>

                                        {!! Form::close() !!}

                                          </div>
                                          
                                        </div>

                                      </div>
                                    </div>




                                    <center>{{ $user->links() }}</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

@endsection


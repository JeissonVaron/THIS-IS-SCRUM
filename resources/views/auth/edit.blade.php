@extends('Administrador.plantillas.admin-nav')

@section('content')  
        <br>
    <div class="container ">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario <a>{{ $users->name}} {{ $users->last_name}}</a></div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="PUT" action="{{route('users.update', $users)}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $users->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $users->last_name}}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name_user') ? ' has-error' : '' }}">
                            <label for="name_user" class="col-md-4 control-label">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="name_user" type="text" class="form-control" name="name_user" value="{{ $users->name_user}}" required autofocus>

                                @if ($errors->has('name_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $users->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('state', 'Estado',[ 'class' => 'col-md-4 control-label']) !!}
                            {!! Form::select('fk_state_id', $states, ['class' => 'form-control select-state ', 'multiple', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('profiles', 'Perfil',[ 'class' => 'col-md-4 control-label']) !!}
                            {!! Form::select('fk_profile_id', $profiles, ['class' => 'select-user form-control', 'multiple', 'required']) !!}
                        </div>                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn  btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection

@section('js')
    <script>
        $('.select-state').chosen({
            max_selected_options: 1
        });
        $('.select-user').chosen({
            max_selected_options: 1
        });
    </script>
@endsection
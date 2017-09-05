@extends('Administrador.plantillas.admin-nav')

@section('content')
<br><div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Historia</div>

                <div class="panel-body">
                    <table class="table table-bordered ">
                    {!! Form::open(['route' => ['Historys.update', $historys->id], 'method' => 'PUT']) !!}              
                        <div class="form-group">
                            {!! Form::label('name', 'Objetivo') !!}
                            {!! Form::textarea('objective', $historys->objective, ['class' =>'form-control textarea-description', 'requerid', 'placeholder' => 'Objetivo de la historia']) !!}
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

@section('js')
<!--<script>
        $('.textarea-description').trumbowyg();
    </script>
-->
@endsection

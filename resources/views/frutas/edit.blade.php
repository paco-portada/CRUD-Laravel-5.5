@extends('layouts.app')

@section('content')
    <h3 class="page-title">Frutas</h3>
      {!! Form::model($fruta, ['method' => 'PUT', 'route' => ['frutas.update', $fruta->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nombre', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nombre'))
                        <p class="help-block">
                            {{ $errors->first('nombre') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
    <a class="btn btn-danger" href="{{ route('frutas.index') }}">Cancelar</a>
    {!! Form::close() !!}
   
@stop


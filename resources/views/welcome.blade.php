
@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
 
                <div class="panel-body" style="text-align: center;">
                   <h1> Bienvenido al Proyecto de Frutas </h1>
                    <br>                              
               <a href="{{  route('frutas.index') }}" class="btn btn-success">Acceder</a>

                 </div>
            </div>
        </div>
    </div>
@endsection
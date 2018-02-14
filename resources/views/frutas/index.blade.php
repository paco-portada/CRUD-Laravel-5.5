
@extends('layouts.app')

@section('content')
    <h3 class="page-title" style="text-align: center;">Listado</h3>

    <p>
        <a href="{{  route('frutas.create') }}" class="btn btn-success">Registrar</a>
    </p>

    <div class="panel panel-default">
        

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($frutas) > 0 ? 'datatable' : '' }}  ">
                <thead>
                    <tr>
                       
                        <th>Nombre</th>                        
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($frutas) > 0)
                        @foreach ($frutas as $fruta)

                            <tr data-entry-id="{{ $fruta->id }}">
                                 
                                <td>{{ $fruta->nombre }}</td>  
                                <td><a href="{{ route('frutas.edit',[$id=$fruta->id]) }}" class="btn btn-xs btn-success">Editar</a>{!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Estas seguro?")."');",
                'route' => ['frutas.destroy', $fruta->id])) !!}
    {!! Form::submit('Eliminar', array('class' => 'btn btn-xs btn- red')) !!}
    {!! Form::close() !!} 
</td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
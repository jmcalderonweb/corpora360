@extends('layouts.master')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left" style="margin-right:50px;"><h3>Lista clientes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('clientes.create') }}" class="btn btn-info" >Añadir cliente</a>
            </div>
          </div>
          <div class="table-container">
            <table id="my-table" class="table table-bordred table-striped" >
             <thead>
               <th>Nombre</th>           
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($clientes->count()>0)  
                @foreach($clientes as $cliente)  
                <tr>
                  <td>{{$cliente->nombre}}</td>               
                 
                  <td><a class="btn btn-primary btn-xs" href="{{action('ClientesController@edit', $cliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <td>
                    <form action="{{action('ClientesController@destroy', $cliente->id)}}" method="post">
                     {{csrf_field()}}
                     <input name="_method" type="hidden" value="DELETE">

                     <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                   </td>
                 </tr>
                 @endforeach 
               @else
                 <tr>
                  <td colspan="8">No hay registro !!</td>
                </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $clientes->links() }}
    </div>
  </div>
</section>

@endsection
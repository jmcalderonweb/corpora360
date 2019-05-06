@extends('layouts.master')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left" style="margin-right:50px;"><h3>Lista pedidos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('pedidos.create') }}" class="btn btn-info" >Añadir pedido</a>
            </div>
          </div>
          <div class="table-container">
            <table id="my-table" class="table table-bordred table-striped" >
             <thead>
               <th>id</th>
               <th>id Cliente</th>
               <th>Fecha</th>
               <th>Importe</th>           
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($pedidos->count()>0)  
                @foreach($pedidos as $pedido)  
                <tr>
                  <td>{{$pedido->id}}</td>
                  <td>{{$pedido->id_cliente}}</td>  
                  <td>{{$pedido->fecha_creacion}}</td>  
                  <td>{{$pedido->importe}}</td>                 
                 
                  <td><a class="btn btn-primary btn-xs" href="{{action('PedidosController@edit', $pedido->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <td>
                    <form action="{{action('PedidosController@destroy', $pedido->id)}}" method="post">
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
     
    </div>
  </div>
</section>

@endsection
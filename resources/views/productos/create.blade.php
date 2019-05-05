@extends('layouts.master')

@section('content')
<h1>Nuevo Producto</h1>
<form action="productos.store" method="post" name="form_nuevo_producto">
	Nombre:
	<input type="text" name="nombre" id="nombre">

	Precio:
	<input type="number" name="precio"	id="precio">
	
</form>
@stop
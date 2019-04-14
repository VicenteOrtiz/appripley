@extends('layouts.app')

@section('content')

<center>

	<h2>Carrito de compras</h2>

	<table>
	  <tr>
	    <th>Producto</th>
	    <th>Precio</th>
	  </tr>
	  <tr>
	    <td>POLE DAY INX NAC</td>
	    <td>$16.990</td>
	  </tr>
	</table>

	<br>
	<br>
	<table>
	  <tr>
	    <th>Subtotal</th>
	    <th>$16.990</th>
	  </tr>
	</table>
	<br>
	<br>
	{{-- <a href="/resumen" class="btn btn-primary btn-lg active gabriel" role="button" aria-pressed="true">Finalizar Compra</a> --}}
	<a href="/metodopago" class="btn btn-primary btn-lg active gabriel" role="button" aria-pressed="true">Pagar</a>

</center>





@endsection
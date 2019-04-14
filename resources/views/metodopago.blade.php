@extends('layouts.app')

@section('content')


<title>Metodo de Pago</title>


<center>
	<h2>Método de pago</h2>
{{-- 	<a href="/transaccion" class="btn btn-primary btn-lg active gabriel" role="button" aria-pressed="true">
		<h3>Banco: Pelotillehue</h3>
		<h3>Numero: 4123432423423423</h3>
	</a> --}}

	<table>
	  <tr>
	    <th>Tipo tarjeta</th>
	    <th>Banco</th>
	    <th>Número</th>
	    <th>Selección</th>
	  </tr>
	  <tr>
	    <td>CRÉDITO</td>
	    <td>Pelotillehue</td>
	    <td>412343242342</td>
	    <td> <a href="/confirmacion" style="color: #00F !important;">Pagar</a> </td>
	  </tr>
	  <tr>
	    <td>RIPLEY</td>
	    <td> - </td>
	    <td>384657364857</td>
	    <td> <a href="/confirmacion" style="color: #00F !important;">Pagar</a> </td>
	  </tr>
	</table>
	<br>

	<h2>Otras opciones</h2>
	
	<table>
	  <tr>
	    <td>Efectivo</td>
	    <td> <a href="#" style="color: #00F !important;">Generar código pre-compra</a> </td>
	  </tr>
{{-- 	  <tr>
	    <td>WebPay</td>
	    <td> <a href="#" style="color: #00F !important;">Pagar</a> </td>
	  </tr> --}}
	</table>
</center>





@endsection
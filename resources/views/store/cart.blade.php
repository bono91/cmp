@extends('base')
@section('content')
@include('store.partials.banner')

<div class="container text-center" >
	<div class="page-header">
		<h4> <i class="fa fa-shopping-cart">Carrito de compras</i></h4>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Quitar</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
				<tr>
					<td>{{ $item->nombre }}</td>
					<td>$ {{ number_format($item->price, 2) }}</td>
					<td>{{ $item->quantity}}</td>
					<td>$ {{ number_format($item->price * $item->quantity, 2) }}</td>
					<td>
						<a href="#" class="btn btn-danger">
							<i class="fa fa-remove"></i>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop
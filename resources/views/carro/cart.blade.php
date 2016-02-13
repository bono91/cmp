@extends('base')
@section('content')


<div class="container text-center" >

	<!--<div class="page-header">
		<h4> <i class="fa fa-shopping-cart">&nbsp;Carrito de compras</i></h4>
	</div>
	!-->
	<br>
	<div class="page-header  text-center">
        @include('store.partials.banner')
    </div>
	<div class0"row">
		<div class="col-md-2"></div>
    <div class=" col-md-8 table-cart">   
    	@if(count($cart))
    	<p>
    		<a href="{{ route('cart-trash')}}" class="btn btn-danger">
    			Vaciar Carrito&nbsp;<i class="fa fa-trash"></i>
    		</a>
    	</p>
 	<div class="table-responsive  ">
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
					
					<td>{{ $item->name }}</td>
					<td>$ {{ number_format($item->price, 2) }}</td>
					<td>
						<input
						type="number"
						min="1"
						max="100"
						value="{{ $item->quantity }}"
						id="product_{{ $item->id }}"

						>
						<a href="" 
						class="btn btn-warning btn-update-item"
						data-href ="{{ route('cart-update', $item->slug) }}"
						data-id="{{ $item->id }}"
						>
					    <i class="fa fa-refresh"></i>
					     </a>
					</td>
					<td>$ {{ number_format($item->price*$item->quantity, 2) }}</td>
					<td>
						<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
							<i class="fa fa-remove"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table><hr>
		<h4>
			<span style="color:#F2770A;">
				Total: ${{ number_format($total,2)}}
			</span>
		</h4>


	</div>

	@else
	    <h4><span style="color:#F2770A;">No hay productos en el carrito</span></h4>
	@endif
	<hr>
	<p>
		<a href="{{ route('muebles-catalogo')}}" class="btn btn-primary btn-xs"><i class="fa fa-chevron-circle-left"></i>&nbsp;Seguir Comprando</a>
		<a href="{{ route('order-detail')}}" class="btn btn-primary btn-xs">Continuar&nbsp;<i class="fa fa-chevron-circle-right"></i></a>
	</p>
	</div>
	
	</div>
</div><br><br><br><br>
@stop
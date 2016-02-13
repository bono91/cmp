@extends('base')
@section('content')

<div class="container text-center">
	<div class="page-header">
		<h4><i class="fa fa-cart-arrow-down"></i>&nbsp; Detalles del pedido</h4><hr>
		<div class="row">
			<div class="col-md-offset-1 col-md-10 ">
				<div class=" col-md-offset- col-md-6 ">

					<div class="panel panel-default">
                       <div class="panel-heading">
                           Datos del Usuario
                        </div>
                        <div class="panel-body">
                           <table class="table">
                               
                               <tr><td><strong>Nombre:</strong></td><td>{{ Auth::user()->name." ".Auth::user()->last_name}}</td></tr>
                               <tr><td><strong>Usuario:</strong></td><td>{{ Auth::user()->user}}</td></tr>
                               <tr><td><strong>Correo:</strong></td><td>{{ Auth::user()->email}}</td></tr>
                               <tr><td><strong>Dirección:</strong></td><td>{{ Auth::user()->address}}</td></tr>
                           </table>
                        </div>
                    </div>					
				</div>
				<div class=" col-md-6">
					<div class="panel panel-default">
                       <div class="panel-heading">
                        <h3 class="panel-title">
                           Datos del Pedido
                          </h3>
                        </div>
                    <div class="panel-body">
                          <table class="table">
                               
                               <tr>
                               	<td><strong>Producto</strong></td>
                               	<td><strong>Precio</strong></td>
                               	<td><strong>Cantidad</strong></td>
                               	<td><strong>Subtotal</strong></td>
                               </tr>
                               @foreach($cart as $item)
                               <tr >
                               	<td><i class="fa fa-angle-double-right" style="color:#F2770A;"></i>&nbsp;{{ $item->name }}</td>
                               	<td>{{ number_format($item->price,2) }}</td>
                               	<td>{{ $item->quantity }}</td>
                               	<td>{{ number_format($item->price * $item->quantity, 2) }}</td>

                               </tr>
                               @endforeach
                           </table>
                           <h3>
                           	<span>
                           		Total : ${{ number_format($total, 2)}}
                           	</span>
                           </h3>
                    </div>
                    </div>
				</div>
				<p>
					<a href="{{ route('muebles-catalogo') }}" class="btn btn-primary btn-xs">
						<i class="fa fa-chevron-circle-left"></i>&nbsp;Regresar
					</a>
					<a href="{{ route('payment') }}" class="btn btn-primary btn-xs">
						Pagar con &nbsp;<i class="fa fa-paypal"></i>
					</a>
				</p>
				
			</div>
			
		</div>
	</div>
</div>

@stop
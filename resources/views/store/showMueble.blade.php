@extends('base')
@section('content')

<section class="container">
	
	<div class="row"><br><br>
	<div class="col-lg-12">
      
                <ol class="breadcrumb">
                    <li ><i class="fa fa-home fa-2x"></i></li>
                   
                    <li id="" >Muebles</li>
                    <li id="">Electrodomesticos</li>
                    <li id="" class="active">{{ $product->name }}</li>

                </ol>
            </div>
          
	
	<div class="col-md-offset-1 col-md-10">
       <div class="panel panel-default" >
        	 <div class="panel-heading"><h5 class="text-center">{{ $product->name }}</h5></div>
        <div class="panel-body">
		      <div class="col-sm-6 col-md-4 ">
		      	<p>
		      		<h3>Modelo: &nbsp;{{ $product->modelo}}</h3>
		      		<h5>Marca: &nbsp;{{ $product->marca}}</h5>

		      	</p>
		      	<hr>
		      	<p style="color:#F2770A;"><i class="fa fa-chevron-right" ></i>&nbsp;CARACTERISTICAS: </p>
		      	<p>{{ $product->description }}</p>


		      </div>

		
		      <div class=" col-sm-6 col-md-4 ">
			  <img src="{{ $product->image }}"  alt="Generic placeholder thumbnail">
		      </div>
		      <div class="col-sm-6 col-md-4 ">
		      	
		      	<p style="color:#F2770A;"> PRECIO: <h2 style="color:#F2770A;">${{ number_format($product->price,2)}}</h2></p>
		      	<p><h2><a href="{{ route('cart-add',$product->slug)}}" class="btn btn-danger btn-block"> Añadir al carrito&nbsp;<i class="fa fa-cart-plus fa-2x"></i></a></h2> </p>
		      </div>
	     </div>
       <div class="panel-footer text-right">
       	<a href="{{ route('muebles-catalogo') }}" class="btn btn-primary btn-xs"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
       </div>   
</div>
	</div>
	<div class="page-header  text-center col-lg-12">
        @include('store.partials.banner')
    </div>  
	</div>
</section>


@stop
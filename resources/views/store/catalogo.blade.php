@extends('base')
@section('title')
Catalogo
@stop

@section('content')
<div class="container">
    <br><br>
	  <div class="page-heade  text-center col-lg-12">
        @include('store.partials.banner')
    </div>
    <div class=" text-center col-lg-12">
        @include('store.partials.nabCatalgo')
    </div><hr>
    

    <div class="row">
     
    <div class="col-md-9 ">
    @foreach($products as $product)

    <div id="products">
        <div class="col-sm-2 col-md-3">
        <div class="thumbnail text-center">
        	<h6>{{ $product->name }}</h6>
              <img src="{{ $product->image }}" alt="Generic placeholder thumbnail">
              <h6 style="color:#F2770A;">Precio: ${{ number_format($product->price,2)}}</h6>
        </div>
        <div class="caption text-center">
 	    	
        <p>
          <a class="btn btn-warning btn-xs" href="{{ route('cart-add',$product->slug)}}"><i class="fa fa-cart-plus"></i>&nbsp;Añadir</a>
          <a class="btn btn-primary btn-xs" href="{{ route('mueble-detail',$product->slug)}}"><i class="fa fa-chevron-circle-right"></i>&nbsp;Leer mas</a>
        </p>

        </div>
      

        </div>
    </div>

    @endforeach
    </div>
   </div>
</div>	
@stop
@extends('admin.admin-base')

@section('content')
<br>
  
  	
  	<div class="page-header well">
  		<p class="navbar-text navbar-right ">
  			<i class="fa fa-list"></i>&nbsp;<strong>Productos</strong>&nbsp;
  	    </p>
  		<a href="{{ route('admin.product.create')}}" class="btn btn-success text-center "><i class="fa fa-plus-square"></i>&nbsp;<small>Agregar nuevo</small></a>
  	</div>
  	<div class="page">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-hover">
  				<thead>
  					<tr class="text-center">
  						
  						<td><strong>N</strong></td>
  						<td><strong>Imagen</strong></td>
  						<td><strong>Nombre</strong></td>
  						<td><strong>Categoria</strong></td>
                        <td><strong>Extracto</strong></td>
  						<td><strong>Precio</strong></td>
  						<td><strong>Marca</strong></td>
  						<td><strong>Modelo</strong></td>
  						<td><strong>Visible</strong></td>
                        <td><strong>Eliminar</strong></td>
                        <td><strong>Editar</strong></td>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($products as $product)
  					<tr data-id="{{ $product->id }}" >
              <td class="text-center">{{ $$product->id }}</td>
  						<td><img src="{{ $product->image }}" width="40"></td>
  						<td>{{ $product->category->name }}</td>
  						<td >{{ $product->extract }}</td>
  						<td class="text-center">${{ number_format($product->price,2) }}</td>
  						<td> {{ $product->marca}}</td>
  						<td>{{ $product->modelo}}</td>
  						<td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
              <td class="text-center">

                {!! Form::open(['route' => ['admin.product.destroy', $product]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      {!! Form::close() !!}

              </td>
              <td class="text-center">   
                <a href="{{route('admin.product.edit',$product->slug)}}" >
                  <i class="fa fa-pencil btn btn-primary"></i>
                </a> 

              
  						</td>
  					</tr>
  					@endforeach
  				</tbody>

  			</table>
  		</div>
  		<hr>
            
            <?php echo $products->render(); ?>
  	</div> 	   
  




@endsection
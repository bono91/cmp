@extends('admin.admin-base')

@section('content')

{!!Form::open()!!}
 <div class="container">
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<strong> Producto Agregado Correctamente.</strong>
	</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		<div class="form-group">
		{!!Form::label('name','Nombre: ')!!}
	    {!!Form::text('name',null, ['id'=>'name','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
	</div>
	<div class="form-group">
		{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}
    </div>

</div>
{!!Form::close()!!}
    
@endsection
@extends('admin.admin-base')
@section('content')
  <br>
  
  	
  	<div class="page-header well">
  		<p class="navbar-text navbar-right ">
  			<i class="fa fa-list"></i>&nbsp;<strong>Categoria de Productos</strong>&nbsp;
  	    </p>
  		<a href="{{ route('admin.category.create')}}" class="btn btn-success text-center "><i class="fa fa-plus-square"></i>&nbsp;<small>Agregar nuevo</small></a>
  	</div>
  	<div class="page">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-hover">
  				<thead>
  					<tr class="text-center">
  						
  						<td><strong>N</strong></td>
  						<td><strong>Nombre</strong></td>
  						<td><strong>Descripcion</strong></td>
  						<td><strong>Color</strong></td>
              <td><strong>Eliminar</strong></td>
              <td><strong>Editar</strong></td>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($categorias as $category)
  					<tr data-id="{{ $category->id }}" >
              <td class="text-center">{{ $category->id }}</td>
  						<td>{{ $category->name }}</td>
  						<td >{{ $category->description }}</td>
  						<td class="text-center">{{ $category->color }}</td>
              <td class="text-center">

                {!! Form::open(['route' => ['admin.category.destroy', $category]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      {!! Form::close() !!}

              </td>
              <td class="text-center">   
                <a href="{{route('admin.category.edit',$category)}}" >
                  <i class="fa fa-pencil btn btn-primary"></i>
                </a> 

              
  						</td>
  					</tr>
  					@endforeach
  				</tbody>

  			</table>
  		</div>
  	</div> 	   
  
  {!! Form::open(['route' => ['admin.category.destroy', ':CATEGORY_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
    
    @endsection

    @section('script')
    <script>
      $(document).ready(function () {
        $('.btn-delete').click(function (e) {
            
           e.preventDefault();
            
           var row = $(this).parents('tr');
           var id = row.data('id');
           var form = $('#form-delete');
           var url =  form.attr('action').replace(':CATEGORY_ID',id);
           var data = form.serialize();
            
            row.fadeOut();

           $.post(url, data, function(result){
              alert(result.message);
           }).fail(function(){
            alert("El registro no fue eliminado");
            row.show();
           });
        });
      });
     </script> 
    @endsection

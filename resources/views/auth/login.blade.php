@extends('base')
@section('content')
<div class="container ">
	<div class="page-header">
		
		<div class="row">
			<div class="col-md-offset-4 col-md-5 ">
				 <div class="panel panel-default">
                       <div class="panel-heading">
                        <h3 class="panel-title text-center">
                          <i class="fa fa-user"></i>&nbsp;Iniciar Sesion
                          </h3>
                        </div>
                    <div class="panel-body">
                          <form method="POST" action="{{ route('login-get') }}">
                      {!! csrf_field() !!}

                           <div class="form-group">
                               <label for="email">Email</label>
                               <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                           </div>

                           <div class="form-group">
                               <label for="password">Password</label>
                               <input class="form-control" type="password" name="password" id="password">
                            </div>

                            <div class="form-group">
                              <input type="checkbox" name="remember"> Remember Me
                            </div>

                            <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                            <div>
                              <a href=""> Olvidaste tu Contraseña ?</a>
                            </div>
                       </form>
                    </div>
                    </div>
        
			</div>
      <div class="col-md-offset-3 col-md-7 ">
          @include('store.partials.errors')
        </div>
		</div>
	</div>
	
</div>



@stop
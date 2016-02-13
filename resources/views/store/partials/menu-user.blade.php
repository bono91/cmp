@if(Auth::check())
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          	<i class="fa fa-user"></i>&nbsp;{{ Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('logout')}}">Cerrar Sesion</a></li>
          </ul>
 </li>
 @else
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          	<i class="fa fa-user"></i>&nbsp;Mi cuenta <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('login-get') }}">Iniciar Sesion</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('register-get') }}">Obtener una Cuenta</a></li>
          </ul>
 </li>
 

 @endif       
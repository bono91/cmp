<div>
<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('home') }}">CMP.</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">La Central Mueblera Pacheo S.A de C.V</p>
            
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('about') }}"><i class="fa fa-mapabout-marker"></i>&nbsp;Sobre la empresa</a></li>
        <li><a href="{{ route('muebles-catalogo') }}"><i class="fa fa-briefcase"></i>&nbsp;Catálogo</a></li>
        <li><a href="{{ route('cart-show')}}"><i class="fa fa-shopping-cart"></i>&nbsp;Carrito</a></li>
        <li><a href="{{ route('contacto.index') }}"><i class="fa fa-envelope"></i>&nbsp;Contacto</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>
</div><br>
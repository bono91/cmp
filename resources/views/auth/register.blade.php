@extends('base')
@section('title')
Registro
@stop

@section('content')
<div class="container">

<h1>Registro</h1>
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        <label for="name" class="label-control">Nombre</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div>
        <label for="email" class="label-control" >Correo Electronico</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <label class="label-control">Password</label>
        <input type="password"class="form-control" name="password">
    </div>

    <div>
        <label class="label-control">Confirm Password</label>
        <input type="password" class="form-control"name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>	

</div>


@stop
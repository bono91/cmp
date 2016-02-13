<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::bind('product', function($slug){
       return cmp\Product::where('slug', $slug)->first();
});

Route::bind('category',function($category){
	   return cmp\Category::find($category);

});

Route::get('/', [
       'as' => 'home',
	   'uses'=>'StoreController@index'
	]);



//catalogo

Route::get('catalogo/muebles',[
    	'as'=>'muebles-catalogo',
        'uses'=>'CatalogoController@getIndex'
    ]);

Route::get('catalogo/muebles/lineablanca',[
       'as'  => 'mueble-lineaBlanca',
        'uses'=>'CatalogoController@getLineaBlanca'
	]);

Route::get('catalogo/muebles/electrodomestico',[
       'as'  => 'mueble-electrodomestico',
        'uses'=>'CatalogoController@getElectrodomestica'
	]);

Route::get('catalogo/muebles/electronico',[
       'as'  => 'mueble-electronico',
        'uses'=>'CatalogoController@getElectronico'
	]);

Route::get('catalogo/muebles/bebes',[
       'as'  => 'mueble-bebes',
        'uses'=>'CatalogoController@getBebes'
	]);

Route::get('catalogo/muebles/muebles-Oficina',[
       'as'  => 'mueble-oficina',
        'uses'=>'CatalogoController@getMueblesOfic'
	]);


Route::get('catalogo/muebles/camas',[
       'as'  => 'mueble-camas',
        'uses'=>'CatalogoController@getCamas'
	]);

Route::get('catalogo/muebles/sofas',[
       'as'  => 'mueble-sofas',
        'uses'=>'CatalogoController@getSofas'
	]);


Route::get('catalogo/muebles/muebles-varios',[
       'as'  => 'mueble-varios',
        'uses'=>'CatalogoController@getVarios'
	]);

Route::get('catalogo/muebles/centro-de-entretenimiento',[
       'as'  => 'mueble-centroE',
        'uses'=>'CatalogoController@getCentroE'
	]);

Route::get('catalogo/muebles/otros',[
       'as'  => 'mueble-otros',
        'uses'=>'CatalogoController@getOtros'
	]);






//descripcion de mueble
Route::get('catalogo/muebles/show/{slug}',[
	    'as'=> 'mueble-detail',
	    'uses'=>'CatalogoController@showMueble'

	]);
Route::get('cart/show', [
        'as' => 'cart-show',
        'uses' => 'CartController@show'
	]);

//agregar producto en el carrito
Route::get('cart/add/{product}',[
	     'as' => 'cart-add',
	     'uses' => 'CartController@add'
	]);

//eliminar producto en el carrito
Route::get('cart/delete/{product}',[
	     'as' => 'cart-delete',
	     'uses' => 'CartController@delete'
	]);

// limpiar carrto
Route::get('cart/trash',[
	     'as' => 'cart-trash',
	     'uses' => 'CartController@trash'
	]);
// modificar producto
Route::get('cart/update/{product}/{quantity}',[
        'as' => 'cart-update',
        'uses' => 'CartController@update'
	]);

//detalles de carrito

Route::get('order-detail',[
    'middleware' => 'auth',
    'as'         => 'order-detail',
    'uses'       => 'CartController@orderDetail'
	
	]);

//autentificaion 

Route::get('inicio-sesion', [
     'as'   =>'login-get',
     'uses' => 'Auth\AuthController@getLogin'
	]);

Route::post('inicio-sesion', [
     'as'   =>'login-post',
     'uses' =>'Auth\AuthController@postLogin'
	]);

//logout
Route::get('auth/logout',[
    'as'    =>'logout',
    'uses'  => 'Auth\AuthController@getLogout'
	]);

// Registration routes...
Route::get('register',[
	'as'   =>'register-get',
	'uses' =>'Auth\AuthController@getRegister'
	]);

Route::post('register', [
	'as'   =>'register-post',
	'uses' =>'Auth\AuthController@postRegister'
	]);

//paypal

//Enviamos nuestro pedido a paypal

Route::get('payment', array(
     'as'    =>  'payment',
     'uses'  =>  'PaypalController@postPayment', 
	));
//Redirecciona a esta ruta

Route::get('payment/status', array(
     'as'    =>  'payment.status',
     'uses'  =>  'PaypalController@getPaymentStatus' 
	));

//Contacto

/*Route::get('contacto/email',[
	'as'   => 'contact',
	'uses' => 'ContactController@index'
	]);
*/
Route::resource('contacto', 'MailController');


//about
Route::get('sobre_la_Empresa/pacheco',[
	'as'   => 'about',
	'uses' =>'AboutController@index'
	]);

//CRUD Administrador Create Reader Update Delete

Route::get('admin', function(){
	return view('admin.home');
});

Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/product', 'Admin\ProductController');



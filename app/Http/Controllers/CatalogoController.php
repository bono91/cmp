<?php

namespace cmp\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use cmp\Http\Requests;
use cmp\Http\Controllers\Controller;
use cmp\Product;

class CatalogoController extends Controller
{
   public function getIndex()
   {
      //$muebles = DB::select('select *from products where category_id=?',[1]);

      $products = Product::all();
      //dd($products);
   	  return view('store.catalogo', compact('products'));
     
   }

   public function getLineaBlanca()
   {
    $muebles = DB::select('select *from products where category_id=?',[1]);
    return view('store.catalogo', ['products'=>$muebles]);
      
   }
    public function getElectrodomestica()
   {
   $muebles = DB::select('select *from products where category_id=?',[2]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

   public function getElectronico()
   {
   $muebles = DB::select('select *from products where category_id=?',[3]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

   public function getBebes()
   {
   $muebles = DB::select('select *from products where category_id=?',[4]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

   public function getMueblesOfic()
   {
   $muebles = DB::select('select *from products where category_id=?',[5]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

   public function getCamas()
   {
   $muebles = DB::select('select *from products where category_id=?',[6]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

   public function getSofas()
   {
   $muebles = DB::select('select *from products where category_id=?',[7]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

   public function getVarios()
   {
   $muebles = DB::select('select *from products where category_id=?',[8]);
    return view('store.catalogo', ['products'=>$muebles]);
   }

  public function getCentroE()
   {
   $muebles = DB::select('select *from products where category_id=?',[9]);
    return view('store.catalogo', ['products'=>$muebles]);
   }
  public function getOtros()
   {
   $muebles = DB::select('select *from products where category_id=?',[10]);
    return view('store.catalogo', ['products'=>$muebles]);
   }  

   public function showMueble($slug)
   {
      $product = Product::where('slug', $slug)->first();
      return view('store.showMueble', compact('product'));
   }

}

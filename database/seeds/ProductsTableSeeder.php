<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use cmp\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  array(
            [
            'name' => 'Mesa Gris',
            'slug' =>'Mesa Gris',
            'description' => 'Mesa color gris tiene 4 patas',
            'extract' => 'tiene como  garantia de dos meses',
            'price' => 473.99,
            'marca' => 'Mabe',
            'modelo' => 'AKSLASL-S',
            'image' => 'http://www.ikea.com/es/es/images/products/lerhamn-mesa__0238239_PE377693_S4.JPG',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'category_id'=> 2 

            ],
            [
            'name' => 'Silla blanca',
            'slug' =>'Silla blanca',
            'description' => 'Mesa color gris tiene 4 patas',
            'extract' => 'tiene como  garantia de dos meses',
            'price' => 473.99,
            'marca' => 'Aval',
            'modelo' => 'LASKQ-W',
            'image' => 'http://www.ikea.com/es/es/images/products/lerhamn-silla-beige__0238235_PE377688_S4.JPG',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'category_id'=> 1 

            ]
         );
        Product::insert($data);
    }
}
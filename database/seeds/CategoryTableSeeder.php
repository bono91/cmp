<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use cmp\Category;

class CategoryTableSeeder extends Seeder
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
             'name'   => 'Linea Blanca',
             'slug'   => 'Linea Blanca',
             'description' => 'Linea Blanca que existen en la central Mueblera Pacheco S.A de C.V.',
             'color' => '#445500'
             ],
             [
             'name'   => 'Electrodomestico',
             'slug'   => 'Electrodomestico',
             'description' => 'Electrodomestico que existen en la central Mueblera Pacheco S.A de C.V.',
             'color' => '#445522'
             ]
         );
        Category::insert($data);
    }
}

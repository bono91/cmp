<?php

namespace cmp;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
	protected $fillable = ['name', 'slug', 'description', 'extract', 'image', 'visible', 'price', 'category_id','marca','modelo'];

	 public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

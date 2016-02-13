<?php

namespace cmp;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
	protected $fillable = ['name', 'slug', 'description', 'color'];
	public $timestamps = false;
    
    public function products()
    {
        return $this->hasMany('cmp\Product');
    }
}

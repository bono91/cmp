<?php

namespace cmp\Http\Controllers;

use Illuminate\Http\Request;

use cmp\Http\Requests;
use cmp\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
    	return view('home');
    }
}

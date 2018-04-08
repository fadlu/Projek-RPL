<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RahasiaController extends Controller
{
    public function Unknown(){
    	return 'halo anj';
    }
    public function showmesecret(){
    	return redirect()->route('secret');
    }
}

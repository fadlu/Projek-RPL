<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
    	return view('pages.homepage');
    }
    public function welcome(){
    	return view('pages.welcome');
    }

    public function about(){
    	$halaman='about';
    	return view('pages.about', compact('halaman'));
    }
     public function profil(){
        $halaman='profil';
        return view('pages.profil', compact('halaman'));
    }
}

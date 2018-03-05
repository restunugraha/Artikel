<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\Kategori;
class webcontroller extends Controller
{
    public function index(){
    	$artikels =artikel::all();
    	$kategoris =Kategori::all();
    	return view('web_index',compact('artikels','kategoris'));
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kategoripengumuman;

class kategoripengumumancontroller extends Controller
{
    public function index(){
        //elloquent =>orm (object Relational Mapping)
     $listKategoripengumuman=Kategoripengumuman::all(); //select * from kategori_artikel
 
     return view('kategori_pengumuman.index' ,compact('listKategoripengumuman'));
 
 
    }
 
    public function show($id){
       $Kategoripengumuman=Kategoripengumuman::find($id);
 
       return view('kategori_pengumuman.show' ,compact('Kategoripengumuman'));      
    }
}

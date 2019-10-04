<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategoriberita;


class kategoriberitacontroller extends Controller
{
    public function index(){
        //elloquent =>orm (object Relational Mapping)
     $listKategoriberita=Kategoriberita::all(); //select * from kategori_artikel
 
     return view('kategori_berita.index' ,compact('listKategoriberita'));
 
 
    }
 
    public function show($id){
       $Kategoriberita=Kategoriberita::find($id);
 
       return view('kategori_berita.show' ,compact('Kategoriberita'));      
    }
}

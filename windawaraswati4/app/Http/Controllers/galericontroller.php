<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class Galericontroller extends Controller
{
    public function index(){
        //elloquent =>orm (object Relational Mapping)
     $listGaleri=Galeri::all(); //select * from kategori_artikel
 
     return view('galeri.index' ,compact('listGaleri'));
 
    }
 
    public function show($id){
       $Galeri=Galeri::find($id);
 
       return view('Galeri.show' ,compact('Galeri'));      
    }
 
    public function create(){
    return view('galeri.create');   
    }
 
    public function store(Request $request){
       $input= $request->all();
       Galeri::create($input);
 
       return redirect(route('galeri.index'));
       
    }
}

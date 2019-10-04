<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class beritacontroller extends Controller
{
    public function index(){
        //elloquent =>orm (object Relational Mapping)
     $listBerita=Berita::all(); //select * from kategori_artikel
 
     return view('berita.index' ,compact('listBerita'));
 
 
    }
 
    public function show($id){
       $Berita=Berita::find($id);
 
       return view('Berita.show' ,compact('Berita'));      
    }
 
    public function create(){
    return view('berita.create');   
    }
 
    public function store(Request $request){
       $input= $request->all();
       Berita::create($input);
 
       return redirect(route('berita.index'));
       
    }
}

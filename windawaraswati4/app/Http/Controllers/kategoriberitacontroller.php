<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;


class kategoriberitacontroller extends Controller
{
    public function index(){
        //elloquent =>orm (object Relational Mapping)
     $listKategoriBerita=KategoriBerita::all(); //select * from kategori_artikel
 
     return view('kategori_berita.index' ,compact('listKategoriBerita'));
 
 
    }
 
    public function show($id){
       $KategoriBerita=KategoriBerita::find($id);
 
       return view('kategori_berita.show' ,compact('KategoriBerita'));      
    }

    public function create(){
        return view('kategori_berita.create');   
        }


    public function store(Request $request){
        $input= $request->all();
        KategoriBerita::create($input);
  
        return redirect(route('kategori_berita.index'));
        
     }
}

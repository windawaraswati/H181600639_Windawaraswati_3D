<?php

namespace App\http\Controllers;

use Illuminate\http\Request;
use App\KategoriArtikel; 
class KategoriArtikelcontroller extends controller
{
   public function index(){
       //elloquent =>orm (object Relational Mapping)
    $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel

    return view('kategori_artikel.index' ,compact('listKategoriArtikel'));


   }

   public function show($id){
      $KategoriArtikel=KategoriArtikel::find($id);

      return view('kategori_artikel.show' ,compact('KategoriArtikel'));      
   }

   public function create(){
   return view('kategori_artikel.create');   
   }

   public function store(Request $request){
      $input= $request->all();
      KategoriArtikel::create([
         'nama'=>$input['nama'],
         'user_id'=>$input['user_id']
      ]);
      
   }
}
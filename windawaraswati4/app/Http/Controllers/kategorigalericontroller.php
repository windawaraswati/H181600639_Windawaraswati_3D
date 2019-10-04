<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kategorigaleri;

class kategorigalericontroller extends Controller
{
    public function index(){
        //elloquent =>orm (object Relational Mapping)
     $listKategorigaleri=Kategorigaleri::all(); //select * from kategori_artikel
 
     return view('kategori_galeri.index' ,compact('listKategorigaleri'));
 
 
    }
 
    public function show($id){
       $Kategorigaleri=Kategorigaleri::find($id);
 
       return view('kategori_galeri.show' ,compact('Kategorigaleri'));      
    }

    public function create(){
        return view('kategori_galeri.create');   
        }


    public function store(Request $request){
        $input= $request->all();
        KategoriGaleri::create($input);
  
        return redirect(route('kategori_galeri.index'));
        
     }
}

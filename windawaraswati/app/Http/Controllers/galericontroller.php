<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use App\KategoriGaleri;

class galericontroller extends Controller
{
    public function index(){
        
        $listGaleri=Galeri::all(); 
        return view('galeri.index' ,compact('listGaleri'));
        
    }

    public function show($id){
        $Galeri=Galeri::find($id);
        return view('galeri.show' ,compact('Galeri'));
    }

    public function create(){
        $KategoriGaleri=KategoriGaleri::pluck('nama', 'id');
        return view('galeri.create',compact('KategoriGaleri'));
    }

    public function store(Request $request){
        $input= $request->all();
        Galeri::create($input);

        return redirect(route('galeri.index'));
    }
}

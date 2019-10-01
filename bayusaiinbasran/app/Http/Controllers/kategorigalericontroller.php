<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class kategorigalericontroller extends Controller
{
    public function index(){
        
        $listKategoriGaleri=KategoriGaleri::all(); 

        return view('kategori_galeri.index' ,compact('listKategoriGaleri'));
    }

    public function show($id){

        $KategoriGaleri=KategoriGaleri::find($id);

        return view('kategori_Galeri.show' ,compact('KategoriGaleri'));

    }

}

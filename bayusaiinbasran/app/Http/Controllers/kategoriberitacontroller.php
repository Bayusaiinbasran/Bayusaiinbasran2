<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;


class kategoriberitacontroller extends Controller
{
    public function index(){
        
        $listKategoriBerita=KategoriBerita::all(); 

        return view('kategori_berita.index' ,compact('listKategoriBerita'));
    }

    public function show($id){

        $KategoriBerita=KategoriBerita::find($id);

        return view('kategori_Berita.show' ,compact('KategoriBerita'));

    }

}


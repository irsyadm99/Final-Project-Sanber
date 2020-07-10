<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function form(){
        return view('pertanyaan.form');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::all();
        return view('pertanyaan', compact('pertanyaan'));
    }

    public function store(Request $request){
        //dd($request->judul);
        $items = new PertanyaanModel;

        $items->judul = $request->judul;
        $items->pertanyaan = $request->pertanyaan;
        $items->tag = $request->tag;

        $items->save();
        return redirect('/forum');
    }
}

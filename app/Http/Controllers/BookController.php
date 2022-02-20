<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $books = DB::table('books')->get();
        return view('index',['books' => $books]);
    }

    public function cari($id){
        $books = DB::table('books')->where('idbuku',$id)->get();
        return view('index',['books' => $books]);
    }

    public function tambah(Request $request){
        $request->file('file')->storeAs('public',$request->idbuku);
        
        DB::table('books')->insert([
            'idbuku' => $request->idbuku,
            'NamaBuku' => $request->NamaBuku,
            'NamaPengarang' => $request->NamaPengarang,
            'Kategori' => $request->Kategori,
            'qty' => $request->qty,
            'Image' => $request->idbuku,
        ]);

        return redirect('/');
    }

    public function hapus($id){
        // hapus file
        $books = DB::table('books')->where('idbuku',$id)->delete();
        return redirect('/');
    }

    public function show($id){
        $books = DB::table('books')->where('idbuku',$id)->get();
        return view('update',['books'=>$books]);
    }

    public function edit(Request $request){
        DB::table('books')->where('idbuku',$request->idbuku)->update([
            'NamaBuku' => $request->NamaBuku,
            'NamaPengarang' => $request->NamaPengarang,
            'Kategori' => $request->Kategori,
            'qty' => $request->qty,
        ]);

        return redirect('/');
    }

}




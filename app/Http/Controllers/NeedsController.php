<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Need;
use Illuminate\Support\Facades\Auth;

class NeedsController extends Controller


{

    public function __construct()
    {
        $this->middleware('auth');
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $need = Need::all();
        return view('needs/index', ['need' => $need]);
    }
    public function create()
    {
        return view('needs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:1024px'
        ]);
        $imgName = $request->gambar->getClientOriginalName() . '-' . time();

        $request->gambar->move(public_path('image'), $imgName);
        // $book = new Book;
        // $book->judul=$request->judul;
        // $book->penulis=$request->penulis;
        // $book->penerbit=$request->penerbit;
        // $book->tahun=$request->tahun;

        // $book->save();

        Need::create([
            'user_id' => Auth::user()->id,
            'gambar' =>  $imgName,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'sinopsis' => $request->sinopsis,
        ]);

        return redirect('/needs')->with('status', 'Donasi kamu berhasil direkam! Silahkan hubungi kami untuk proses selanjutnya');
    }
}
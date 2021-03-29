<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;

class TestimonisController extends Controller
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
        $testimoni = Testimoni::all();
        return view('testimonis/index', ['testimoni' => $testimoni]);
    }
    public function create()
    {
        return view('testimonis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Testimoni::create([

            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'testimoni' => $request->testimoni

        ]);

        return redirect('/testimonis')->with('status', 'Testimoni kamu berhasil direkam!');
    }
}
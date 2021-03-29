<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('books/index', ['book' => $book]);
    }

    // public function search(Request $request)
    // {
	// 	$search = $request->search;
    // $books = DB::table('books')
    // ->where('judul','like',"%".$search."%")
    // ->paginate();
    
    // return view('books.index',['books' => $books]);

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
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
        $imgName = $request->gambar->getClientOriginalName();

        $request->gambar->move(public_path('image'), $imgName);
        // $book = new Book;
        // $book->judul=$request->judul;
        // $book->penulis=$request->penulis;
        // $book->penerbit=$request->penerbit;
        // $book->tahun=$request->tahun;

        // $book->save();

        Book::create([

            'gambar' =>  $imgName,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'sinopsis' => $request->sinopsis,
        ]);

        return redirect('/books')->with('status', 'Data Buku Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {


        Book::where('id', $book->id)
            ->update([
                
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahun' => $request->tahun,
                'sinopsis' => $request->sinopsis,

            ]);
        return redirect('/books')->with('status', 'Data Buku Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/books')->with('status', 'Data Buku Berhasil Dihapus!');
    }
}
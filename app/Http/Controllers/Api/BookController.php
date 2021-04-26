<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Instanciem la classe Pokemon
        $book = new Book;
        //Declarem el nom amb el request
        $book->name = $request->name;
        $book->iban = $request->iban;
        $book->pvp = $request->pvp;
        $book->pvp_discount = $request->pvp_discount;
        $book->stock = $request->stock;
        //Desem els canvis
        $book->save();
        return "libro guardado con éxito";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book =  Book::where('id', $id)->first();
        if($book == null){
            return "el libro no existe";

        }
        return $book;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Instanciem la classe Pokemon
        $book = Book::where('id', $id)->first();
        if($book != null){

       
        //Declarem el nom amb el request
        if(isset($request->name)){
            $book->name = $request->name;
        }
        if(isset($request->iban)){
            $book->iban = $request->iban;
        }
        if(isset($request->pvp)){
            $book->pvp = $request->pvp;
        }
        if(isset($request->pvp_discount)){
            $book->pvp_discount = $request->pvp_discount;
        }
        if(isset($request->stock)){
            $book->stock = $request->stock;
        }
        //Desem els canvis
        $book->update();
        return "libro actualizado con éxito";

    }
        return "libro no éxiste";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id', $id)->first();
        if($book != null){
            $book->delete();
            return "borrado con éxito";
        }
        return " el libro no existe";
       

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id) {
         
        $book=Book::findOrFail($id);

        return view('book',compact('book'));
        
    }
}

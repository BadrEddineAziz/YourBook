<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories=Categorie::all();
        $books=Book::latest()->take(6)->get();
        return view('home', compact('books','categories'));
    }

    public function allBooks()
    {
        $books=Book::all();
        
        return view('allBooks', compact('books'));
    }
    public function search(Request $request) {

        $searchTerm = $request->get('term');

        $results = Book::where('Title', 'like', '%' . $searchTerm . '%')
            ->orWhere('Author', 'like', '%' . $searchTerm . '%')
            ->get();

        return response()->json($results);
    }
}

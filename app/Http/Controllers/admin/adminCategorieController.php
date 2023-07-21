<?php

namespace App\Http\Controllers\admin;

use App\Models\Book;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminCategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id) {
         
        $categorie=Categorie::findOrFail($id);

        return view('categorie',compact('categorie'));
        
    }
    public function create() {

        return view('admin/createCategorie');
    }

    public function store (Request $req)  {

       $data = $req->validate([
            'Libelle' => 'required' ,
            'Description' => 'required',
            
        ]);

        Categorie::create($data);

        $categories=Categorie::all();
        $books=Categorie::all();

        return view('admin/dashbord', compact('books','categories'));
        
    }

    public function updateCategorie($id) {
         
        $categorie=Categorie::findOrFail($id);

        return view('admin/book',compact('categorie'));
        
    }

    public function updatedCategorie (Request $req,$id)  {

        $categorie=Categorie::findOrFail($id);

    
 
            $categorie->Libelle = $req->Libelle;
         
            $categorie->Description = $req->Description;
   
          
            $book->save();
 
         $categories=Categorie::all();
         $books=Book::all();
 
         return view('admin/dashbord', compact('books','categories'));
         
     }

     public function destroy($id)
     {
         $categorie = Categorie::find($id);
 
          $categorie->delete();
    
          $categories=Categorie::all();
          $books=Book::all();
  
          return view('admin/dashbord', compact('books','categories'));
     }
}

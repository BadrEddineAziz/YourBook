<?php

namespace App\Http\Controllers\admin;

use App\Models\Book;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminBookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()  {
        $categories=Categorie::all();
        $books=Book::all();
        return view('admin/dashbord', compact('books','categories'));
    }

    public function create() {

        $categories=Categorie::all();
        return view('admin/create',compact('categories'));
    }

    public function store (Request $req)  {

       $Imagename= time().'.'.$req->Image->extension();
       $Contentname= time().'.'.$req->Content->extension();
        
       $image= $req->file('Image')->storeAs(
            "images",
            $Imagename,
            "public"
        );


        $content=$req->file('Content')->storeAs(
            "contents",
            $Contentname,
            "public"
        );

       $data = $req->validate([
            'Title' => 'required' ,
            'Author' => 'required',
            'Description' => 'required',
            'Image' => 'required',
            'Content' => 'required'
        ]);

        $book=Book::create([
            'Title' => $req->Title ,
            'Author' => $req->Author,
            'Description' => $req->Description,
            'Image' => $image,
            'Content' =>$content,
        ]);

         $book->categories()->attach($req->Categorie);

        $categories=Categorie::all();
        $books=Book::all();

        return redirect('/admin');
        
    }

    public function updateBook($id) {
         
        $book=Book::findOrFail($id);

        return view('admin/book',compact('book'));
        
    }

    public function updatedBook (Request $req,$id)  {

        $book=Book::findOrFail($id);

    
 
            $book->Title = $req->Title;
            $book->Author = $req->Author;
            $book->Description = $req->Description;
   
          
            $book->save();
 
         $categories=Categorie::all();
         $books=Book::all();
 
         return view('admin/dashbord', compact('books','categories'));
         
     }


     public function updateImage($id) {
         
        $book=Book::findOrFail($id);

        return view('admin/image',compact('book'));
        
    }

     public function updatedImage (Request $req,$id)  {

        $book=Book::findOrFail($id);

       
 
            $book->Image = $req->Image;
          
          
            $book->save();
 
         $categories=Categorie::all();
         $books=Book::all();
 
         return view('admin/dashbord', compact('books','categories'));
         
     }
     public function updateContent($id) {
         
        $book=Book::findOrFail($id);

        return view('admin/content',compact('book'));
        
    }

     public function updatedContent (Request $req,$id)  {

        $book=Book::findOrFail($id);

 
            $book->Content = $req->Content;
          
            $book->save();
 
         $categories=Categorie::all();
         $books=Book::all();
 
         return view('admin/dashbord', compact('books','categories'));
         
     }

     public function destroy($id)
    {
        $book = Book::find($id);

         $book->delete();
   
         $categories=Categorie::all();
         $books=Book::all();
 
         return view('admin/dashbord', compact('books','categories'));
    }
}

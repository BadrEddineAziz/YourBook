<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function show($id) {
         
        $categorie=Categorie::findOrFail($id);

        return view('admin/categorie',compact('categorie'));
        
    }
}

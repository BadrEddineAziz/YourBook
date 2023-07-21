<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['Libelle', 'Description'];

    public function books() {

        return $this->belongsToMany(Book::class);

        }

}

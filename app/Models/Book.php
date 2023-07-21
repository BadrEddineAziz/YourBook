<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = ['Title', 'Author', 'Description','Image','Content'];

    public function categories() {

        return $this->belongsToMany(Categorie::class);

        }
}

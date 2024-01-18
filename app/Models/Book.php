<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $table = 'books';


    protected $fillable = [
        'title',
        'author',
        'isbn',
        'classification_number',
        'pages_number',
        'book_height',
        'publishing_house',
        'publishing_location',
        'publishing_year',
        'peinter_number',
        'subject'
    ];


}

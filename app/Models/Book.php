<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'printer_number',
        'subject',
        'image'
    ];


}

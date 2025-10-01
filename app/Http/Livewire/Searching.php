<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Searching extends Component
{
    public $books;
    public $flag = false;

    protected $listeners = [
        'showBooks',
    ];


    public function showBooks($books) {
        $this->flag = true;
        if($books) {
            $ids = [];
            foreach($books as $book) {
                $ids[] = $book['id'];
            }
            $this->books = Book::find($ids);
        } else {
            $this->books = '';
        }

    }
    public function render()
    {
        $this->books = $this->flag == true ? $this->books : Book::all();
        return view('livewire.searching');
    }
}

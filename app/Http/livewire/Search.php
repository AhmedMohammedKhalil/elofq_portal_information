<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    public $search,$type_id,$books,$keywords;

    public function mount() {
        $this->type_id = 1;
    }

    public function makeSearch() {
        if($this->search == '')
            $this->books = Book::all();
        else {
            if($this->type_id == 1 ) {
                $this->books = Book::where('title','like','%'.$this->search.'%')->get();
            } else if ($this->type_id == 2 ) {
                $this->keywords = explode(',',$this->search);
                $collection = DB::Table('books')->select('*');
                foreach($this->keywords as $key => $keyword) {
                    if($key == 0) {
                        $collection->where('subject','like','%'.$keyword.'%');
                    }
                    $collection->orWhere('subject','like','%'.$keyword.'%');
                }
                $this->books = $collection->unique('id')->get();
            } else if ($this->type_id == 3) {
                $this->books = Book::where('author','like','%'.$this->search.'%')->get();
            }
        }
        $this->emitTo(searching::class,'showBooks',$this->books);
    }

    public function render()
    {
        return view('livewire.search');
    }
}

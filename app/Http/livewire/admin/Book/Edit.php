<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Book;
use Livewire\Component;

class Edit extends Component
{

    public $title,$author,$isbn,$classification_number,$pages_number,
    $book_height,$publishing_house,$publishing_location,$publishing_year,
    $printer_number,$subject,$book;


    public function mount($book_id)
    {
        $this->book = Book::find($book_id);
        $this->title = $this->book->title;
        $this->author = $this->book->author;
        $this->isbn = $this->book->isbn;
        $this->classification_number = $this->book->classification_number;
        $this->pages_number = $this->book->pages_number;
        $this->book_height = $this->book->book_height;
        $this->publishing_house = $this->book->publishing_house;
        $this->publishing_location = $this->book->publishing_location;
        $this->publishing_year = $this->book->publishing_year;
        $this->printer_number = $this->book->printer_number;
        $this->subject = $this->book->subject;
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة'
    ];

    protected $rules = [
        'title' => ['required'],
        'classification_number' => ['required'],
        'subject' => ['required','max:255'],
    ];

    public function validation($validateData) {
        $array = ['printer_number','book_height','pages_number','author','isbn','publishing_house','publishing_location','publishing_year'];
        foreach($array as $el) {
            if(!empty($this->{$el})) {
                $validateData = array_merge($validateData , ["{$el}" => $this->{$el}]);
            }
        }
        return $validateData;
    }

    public function edit() {
        $validateData = $this->validate();
        $validateData = $this->validation($validateData);
        //dd($validateData);
        $this->book->update($validateData);
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.book.index');
    }
    public function render()
    {
        return view('livewire.admin.books.edit');
    }
}

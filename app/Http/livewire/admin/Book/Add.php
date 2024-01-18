<?php

namespace App\Http\Livewire\Admin\Article;

use App\Models\Book;
use Livewire\Component;

class Add extends Component
{

    public $title,$author,$isbn,$classification_number,$pages_number,
    $book_height,$publishing_house,$publishing_location,$publishing_year,
    $peinter_number,$subject;

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة'
    ];

    protected $rules = [
        'title' => ['required'],
        'classification_number' => ['required'],
        'pages_number' => ['required'],
        'book_height' => ['required'],
        'peinter_number' => ['required'],
        'subject' => ['required','max']
    ];

    public function validation($validateData) {
        $array = ['author','isbn','publishing_house','publishing_location','publishing_year'];
        foreach($array as $el) {
            if(!empty($this->{$el})) {
                $validateData = array_merge($validateData , ["'{$el}'" => $this->{$el}]);
            }
        }
        return $validateData;
    }

    public function add() {
        $validateData = $this->validate();
        $validateData = $this->validation($validateData);
        Book::create($validateData);
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.book.index');
    }
    public function render()
    {
        return view('livewire.admin.book.add');
    }
}

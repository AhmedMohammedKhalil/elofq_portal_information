<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use Livewire\Component;

class Add extends Component
{

    public $title;
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الإسم أقل من 150 حرف',
    ];

    protected $rules = [
        'title' => ['required', 'max:150'],
    ];
    public function add()
    {
        $validatedata = $this->validate();
        $class = Classes::create(array_merge($validatedata));


        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.class.index');
    }
    public function render()
    {
        return view('livewire.admin.classes.add');
    }
}

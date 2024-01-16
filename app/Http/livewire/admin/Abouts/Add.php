<?php

namespace App\Http\Livewire\Admin\Abouts;

use App\Models\Abouts;
use Livewire\Component;

class Add extends Component
{

    public $content;

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',

    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
    ];



    public function add()
    {
        $validatedata = $this->validate();
        Abouts::create(array_merge($validatedata, ['type' => 'heading2']));
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.about.index');
    }
    public function render()
    {
        return view('livewire.admin.abouts.add');
    }
}

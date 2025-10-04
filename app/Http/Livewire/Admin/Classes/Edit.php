<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use Livewire\Component;

class Edit extends Component
{


    public  $title;

    public function mount($class_id)
    {
        $this->class = Classes::find($class_id);
        $this->title = $this->class->title;

    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الإسم أقل من 150 حرف',
    ];

    protected $rules = [
        'title' => ['required', 'max:150'],
    ];


    public function edit()
    {
        $validatedata = $this->validate();
        $this->class->update($validatedata);

        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.class.index');
    }
    public function render()
    {
        return view('livewire.admin.classes.edit');
    }
}

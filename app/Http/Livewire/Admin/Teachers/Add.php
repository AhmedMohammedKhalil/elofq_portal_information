<?php

namespace App\Http\Livewire\Admin\Teachers;

use App\Models\Department;
use App\Models\Teacher;
use Livewire\Component;

class Add extends Component
{

    public $name,$department_id, $departments ;
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'phone.min' => 'لابد ان يكون الموبايل مكون من 8 ارقام',
        'phone.max' => 'لابد ان يكون الموبايل مكون من 8 ارقام',
        'c_number.min' => 'لابد ان يكون الرقم المدني مكون من 12 ارقام',
        'c_number.max' => 'لابد ان يكون الرقم المدني مكون من 12 ارقام',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'phone.unique' => 'هذا الموبايل مسجل فى الموقع',
        'c_number.unique' => 'هذا الرقم مسجل فى الموقع',
        'gt' => 'يجب اختيار القسم',
        'numeric' => 'يجب ان يكون الموبايل رقم'
    ];

    protected $rules = [
        'name' => ['required', 'max:255'],
        'department_id' => ['required','gt:0'],
    ];



    public function add()
    {
        $validatedata = $this->validate();
        $teacher = Teacher::create(array_merge($validatedata));
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.teacher.index');
    }
    public function render()
    {
        $this->departments = Department::select('id','title')->get();
        return view('livewire.admin.teachers.add');
    }
}

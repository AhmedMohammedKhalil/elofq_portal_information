<?php

namespace App\Http\Livewire\Admin\Teachers;

use App\Models\Department;
use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{

    use WithFileUploads;

    public  $name, $department_id, $departments, $teacher;

    public function mount($teacher_id)
    {
        $this->teacher = Teacher::find($teacher_id);
        $this->name = $this->teacher->name;
        $this->department_id = $this->teacher->department_id;

    }
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


    public function edit()
    {

        $validatedata = $this->validate();
        $this->teacher->update($validatedata);
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.teacher.index');
    }
    public function render()
    {
        $this->departments = Department::select('id','title')->get();
        return view('livewire.admin.teachers.edit');
    }
}

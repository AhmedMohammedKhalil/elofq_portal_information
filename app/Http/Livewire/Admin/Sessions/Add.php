<?php

namespace App\Http\Livewire\Admin\Sessions;

use Carbon\Carbon;
use App\Models\Classes;
use App\Models\Session;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;

class Add extends Component
{

    public $department_id,$types,$type,$departments,$classes,$class_id,$teachers,$teacher_id,$date,$days,$day;

    public function mount() {
        $this->types = [
            'الحصة الأولي',
            'الحصة الثانية',
            'الحصة الثالثة',
            'الحصة الرابعة',
            'الحصة الخامسة',
            'الحصة السادسة',
        ];

        $this->days = [
            'Saturday'   => 'السبت',
            'Sunday'     => 'الأحد',
            'Monday'     => 'الاثنين',
            'Tuesday'    => 'الثلاثاء',
            'Wednesday'  => 'الأربعاء',
            'Thursday'   => 'الخميس',
            'Friday'     => 'الجمعة',
        ];
        $this->type = $this->types[0];

        $this->departments = Department::all();
        $department = Department::first();
        $this->department_id = $department->id;

        $this->teachers = $department->teachers;
        $this->teacher_id = $department->teachers->first()?->id;
        $this->classes = Classes::all();
        $this->class_id = Classes::first()->id;

        $this->date = Carbon::today()->format('d-m-Y');
        $this->day = $this->days[Carbon::parse($this->date)->dayName];
    }



    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'department_id.gt' => 'يجب ان تختار القسم',
        'teacher_id.gt' => 'يجب ان تختار المعلم',
        'class_id.gt' => 'يجب ان تختار الصف',
        'type.gt' => 'يجب ان تختار الحصة',
        'date_format' => 'يحب ان يكون التاريخ على نفس الصيغة d-m-Y كمثال 01-01-2025',
        'after_or_equal' => 'يجب ان يكون التاريخ اكبر او يساوى تاريخ اليوم',
        'date' => 'يجب ان يكون الحقل تاريخ'
    ];

    protected $rules = [
        'department_id' => ['required', 'gt:0'],
        'teacher_id' => ['required', 'gt:0'],
        'class_id' => ['required', 'gt:0'],
        'type' => ['required','not_in:0'],
        'date' => ['date','date_format:d-m-Y','after_or_equal:today']
    ];

    public function updatedDate() {
        $validatedata = $this->validate(
            ['date' => ['date','date_format:d-m-Y','after_or_equal:'.Carbon::today()->toDateString()]]
        );
        $this->day = $this->days[Carbon::parse($this->date)->dayName];
    }


    public function updatedDepartmentId() {
        $this->teacher_id = '0';
        $this->teachers = [];
        $validatedata = $this->validate(
            ['department_id' => ['required','gt:0']]
        );
        $this->teachers = Teacher::where('department_id',$this->department_id)->get();
        $this->teacher_id = Teacher::where('department_id',$this->department_id)->first()?->id;
    }

    public function add() {
        $validatedata = $this->validate();
        $BookedSession = Session::where([
            'date' => $this->date,
            'type' => $this->type
        ])->first();
        if($this->day == 'الجمعة') {
            session()->flash('error', 'لا يمكن اختيار يوم الجمعة');
        }elseif($BookedSession != null) {
            session()->flash('error', 'يوجد حصة فى المكتبة محجوزة حالياً');
        } else {

            Session::create(array_merge($validatedata, ['day' => $this->day]));
            session()->flash('success', 'تم حجز الحصة بنجاح');
            return redirect()->route('admin.session.index');
        }
        $this->dispatchBrowserEvent('hide-flash');
    }


    public function render()
    {
        return view('livewire.admin.sessions.add');
    }
}

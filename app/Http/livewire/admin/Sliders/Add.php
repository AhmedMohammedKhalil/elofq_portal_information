<?php

namespace App\Http\Livewire\Admin\Sliders;

use App\Models\Sliders;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Add extends Component
{

    public $title, $content, $image,$style;
    use WithFileUploads;
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',

    ];

    protected $rules = [
        'title' => ['required', 'max:255'],
        'content' => ['required', 'max:255'],
        'style' => ['required'],
        'image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }

    public function add()
    {
        $this->style = $this->style ?? '1';
        $validatedata = $this->validate();
        $imagename = $this->image->getClientOriginalName();
        $slider = Sliders::create(array_merge($validatedata, ['image' => $imagename]));
        $dir = public_path('assets/img/sliders/' . $slider->id);
        if (file_exists($dir))
            File::deleteDirectories($dir);
        else
            mkdir($dir);
        $this->image->storeAs('sliders/' . $slider->id, $imagename);
        File::deleteDirectory(public_path('assets/img/livewire-tmp'));

        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.slider.index');
    }
    public function render()
    {
        return view('livewire.admin.sliders.add');
    }
}

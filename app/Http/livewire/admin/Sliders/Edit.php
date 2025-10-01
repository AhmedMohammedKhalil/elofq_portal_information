<?php

namespace App\Http\Livewire\Admin\Sliders;

use App\Models\Sliders;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{

    use WithFileUploads;

    public  $content, $image, $slider,$title;

    public function mount($slider_id)
    {
        $this->slider = Sliders::find($slider_id);
        $this->content = $this->slider->content;
        $this->title = $this->slider->title;

    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'content.max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',

    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }
    public function edit()
    {
        $validatedata = $this->validate();
        if (!$this->image)
            $this->slider->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->slider->update(array_merge($validatedata, ['image' => $imagename]));
            $dir = public_path('img/sliders/'.$this->slider->id);
            if (file_exists($dir))
                File::deleteDirectory($dir);
            mkdir($dir);
            $this->image->storeAs('sliders/'.$this->slider->id, $imagename);
            File::deleteDirectory(public_path('img/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.slider.index');
    }
    public function render()
    {
        return view('livewire.admin.sliders.edit');
    }
}

<?php

namespace App\Http\Livewire\Admin\Abouts;

use App\Models\Abouts;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{

    use WithFileUploads;

    public  $content,$title,$image,$heading, $about;

    public function mount($about_id)
    {
        $this->about = Abouts::find($about_id);
        $this->content = $this->about->content;
        $this->title = $this->about->title;
        $this->heading = $this->about->heading;


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
        'title' => ['required'],
        'heading' => ['required']

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
            $this->about->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->about->update(array_merge($validatedata, ['image' => $imagename]));
            $dir = public_path('img/abouts/');
            if (file_exists($dir))
                File::deleteDirectory($dir);
            mkdir($dir);
            $this->image->storeAs('abouts/', $imagename);
            File::deleteDirectory(public_path('img/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.about.index');


    }

    public function render()
    {
        return view('livewire.admin.abouts.edit');
    }
}

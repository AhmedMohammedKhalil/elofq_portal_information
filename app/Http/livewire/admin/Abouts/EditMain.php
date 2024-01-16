<?php

namespace App\Http\Livewire\Admin\Abouts;

use App\Models\Abouts;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditMain extends Component
{

    use WithFileUploads;

    public  $content, $image, $about;

    public function mount($about_id)
    {
        $this->about = Abouts::find($about_id);
        $this->content = $this->about->content;
    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'content.max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',

    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
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
            $dir = public_path('assets/img/abouts/');
            if (file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs('abouts/', $imagename);
            File::deleteDirectory(public_path('assets/img/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.about.index');
    }
    public function render()
    {
        return view('livewire.admin.abouts.edit-main');
    }
}

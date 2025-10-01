<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{

    use WithFileUploads;

    public  $content,$image, $service;

    public function mount($service_id)
    {
        $this->service = Service::find($service_id);
        $this->content = $this->service->content;

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
            $this->service->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            $this->service->update(array_merge($validatedata, ['image' => $imagename]));
            $dir = public_path('img/services/'.$this->service->id);
            if (file_exists($dir))
                File::deleteDirectory($dir);
            mkdir($dir);
            $this->image->storeAs('services/'.$this->service->id, $imagename);
            File::deleteDirectory(public_path('img/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.service.index');
    }
    public function render()
    {
        return view('livewire.admin.service.edit');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class Slider extends Component
{

    use WithFileUploads;


    public $title;
    public $image;
    public $body;

    protected $rules=[
        'title' => 'required|min:3',
        'body' => 'required|min:5',
        'image' => 'required|file|mimes:png,jpg',
    ];

    protected $messages=[
        'title.min' => 'يجب ادخال اكثر من ٣ حروف',
        'required' => 'هذا الحقل مطلوب',
        'body.min' => 'يجب ادخال اكثر من ٥ حروف',
        'image.file' => 'يجب أن يكون ملف',
        'image.mimes' => 'يجب أن بصيغة png او jpg',
    ];


    public function render()
    {
        $sliders = \App\Models\slider::get();
        return view('livewire.slider',[
            "sliders" => $sliders
        ]);
    }

    public function saveSlider(){

        $this->validate();

        $ext = $this->image->getClientOriginalExtension();
        $imageName = 'slider_'. time(). $ext;
        $this->image->storeAs('public/slider', $imageName);


        \App\Models\slider::create([
            'title' => $this->title,
            'image' => $imageName,
            'body' => $this->body,
        ]);

        $this->resetVars();
        session()->flash('message', 'تم الاضافة بنجاح');

    }

    public function resetVars()
    {

        $this->title='';
        $this->body='';
        $this->image='';
    }

    public function deleteSlider($sliderId){
        \App\Models\slider::find($sliderId)->delete();
    }
}

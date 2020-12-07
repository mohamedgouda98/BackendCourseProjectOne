<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{

    public $title;
    public $image;
    public $body;


   public function __construct()
   {
       $about = $this->getAbout();
       $this->title = $about->title;
       $this->body = $about->body;
   }

    protected $rules=[
        'title' => 'required|min:3',
        'body' => 'required|min:5',
    ];

    protected $messages=[
        'title.min' => 'يجب ادخال اكثر من ٣ حروف',
        'required' => 'هذا الحقل مطلوب',
        'body.min' => 'يجب ادخال اكثر من ٥ حروف',
    ];


    public function render()
    {
        return view('livewire.about');
    }


    public function updateAbout(){

        $this->validate();

        $about = $this->getAbout();

        if(!empty($this->image)) {
            $ext = $this->image->getClientOriginalExtension();
            $imageName = 'slider_' . time() . $ext;
            $this->image->storeAs('public/slider', $imageName);
        }else{
            $imageName = $about->image;
        }

        $about->update([
            'title' => $this->title,
            'image' => $imageName,
            'body' => $this->body,
        ]);

        session()->flash('message', 'تم التعديل بنجاح');

    }


    public function getAbout(){
        return \App\Models\about::first();
    }
}

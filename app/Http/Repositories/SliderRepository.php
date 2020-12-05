<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\SliderInterface;
use App\Models\slider;
use Illuminate\Support\Facades\Validator;

class SliderRepository implements SliderInterface{

    protected $slider_model;

    public function __construct(slider $slider)
    {
        $this->slider_model = $slider;
    }

    public function addSlider($request){

        $request->validate([
            'title' => 'required|min:5|max:20',
            'image' => 'required',
            'body' => 'required|min:5',
        ]);


        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = 'slider_' . time() . '.' . $ext;
            $image->storeAs('public/slider', $imageName);
        }else{
            $imageName = '';
        }

         $this->slider_model::create([
            'title' => $request->title,
            'image' => $imageName,
            'body' => $request->body,
        ]);

    }

}

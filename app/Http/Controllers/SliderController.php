<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\SliderInterface;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliderInterface;
    public function __construct(SliderInterface $sliderInterface)
    {
        $this->sliderInterface = $sliderInterface;
    }


    public function addSlider(Request $request){
        $this->sliderInterface->addSlider($request);
        return redirect(route('admin'))->with('status', ' تم اضافة الشريحة بنجاح');
    }


}

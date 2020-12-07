<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function updateAbout(Request $request){

        $request->validate([
            'title' => 'required|min:5|max:20',
            'body' => 'required|min:5',
        ]);

        $about = about::first();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = 'about_' . time() . '.' . $ext;
            $image->storeAs('public/about', $imageName);
        }else{
            $imageName = $about->image;
        }

        $about->update([
            'title' => $request->title,
            'image' => $imageName,
            'body' => $request->body,
        ]);

        return redirect(route('admin'))->with('status', 'تم تعديل المعلومات بنجاح');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $about = \App\Models\about::first();

        return view('livewire.about',[
            'about' => $about,
        ]);
    }
}

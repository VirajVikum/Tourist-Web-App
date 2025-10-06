<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class PopularTours extends Component
{
    public $places = [];

    public function mount()
    {
        $path = resource_path('data/places.json');

        if (File::exists($path)) {
            $data = json_decode(File::get($path), true);
            $this->places = array_slice($data, 0, 6); // ✅ Show first 6 only
        }
    }
    
    public function render()
    {
        return view('livewire.home.popular-tours');
    }
}

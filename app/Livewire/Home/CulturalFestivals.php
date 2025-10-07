<?php

namespace App\Livewire\Home;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class CulturalFestivals extends Component
{
    public $festivals = [];

    public function mount()
    {
        $path = resource_path('data/festivals.json');

        if (File::exists($path)) {
            $this->festivals = json_decode(File::get($path), true);
        }
    }
    public function render()
    {
        return view('livewire.home.cultural-festivals');
    }
}

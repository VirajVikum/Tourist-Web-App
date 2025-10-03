<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class HomeHero extends Component
{

    public $currentIndex = 0;
    public $images = [];

    public function mount()
    {
        // Fetch all jpg/png images from the public/images/slider folder
        $this->images = collect(File::files(public_path('images/slider')))
            ->map(function ($file) {
                return $file->getFilename();
            })
            ->toArray();
    }

    public function nextSlide()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
    }

    public function prevSlide()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
    }
    public function render()
    {
        return view('livewire.home.home-hero');
    }
}

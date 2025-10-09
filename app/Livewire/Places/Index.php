<?php

namespace App\Livewire\Places;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public $place;

    public function mount($slug)
    {
        $jsonPath = resource_path('data/places.json');
        $places = json_decode(file_get_contents($jsonPath), true);

        $this->place = collect($places)->firstWhere('slug', $slug);

        if (!$this->place) {
            abort(404, 'Place not found');
        }
    }
    public function render()
    {
        return view('livewire.places.index')->layout('welcome');
    }
}

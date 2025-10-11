<?php

namespace App\Livewire\Places;

use Livewire\Component;

class ViewAllPlaces extends Component
{
    public $type;
    public $locations = [];

    public function mount($type)
    {
        $jsonPath = resource_path('data/places.json');
        $allLocations = json_decode(file_get_contents($jsonPath), true);

        // Filter by type
        $this->locations = collect($allLocations)
            ->where('type', $type)
            ->values()
            ->all();

        $this->type = $type;
    }
    public function render()
    {
        return view('livewire.places.view-all-places')->layout('welcome');
    }
}

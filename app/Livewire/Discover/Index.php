<?php

namespace App\Livewire\Discover;

use Livewire\Component;

class Index extends Component
{
    public $locationsByType = [];

    public function mount()
    {
        $jsonPath = resource_path('data/places.json');
        $locations = json_decode(file_get_contents($jsonPath), true);

        // Group by type
        $grouped = collect($locations)->groupBy('type');

        // Take only the first 4 per type
        // $this->locationsByType = $grouped->map(fn($items) => $items->take(4));
        $this->locationsByType = collect($locations)
            ->groupBy('type')
            ->map(fn($group) => $group->take(4))
            ->toArray();

    }
    public function render()
    {
        return view('livewire.discover.index')->layout('welcome');
    }
}

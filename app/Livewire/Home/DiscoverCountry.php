<?php

namespace App\Livewire\Home;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class DiscoverCountry extends Component
{
    public $topics = [];
    public $topicKey = null;

    public function mount($topic = null)
    {
        $path = resource_path('data/discover.json');
        if(File::exists($path)) {
            $this->topics = collect(json_decode(File::get($path), true))
                ->keyBy('key') // use keys for easy lookup
                ->toArray();
        }

        $this->topicKey = $topic;
    }
    public function render()
    {
        return view('livewire.home.discover-country');
    }
}

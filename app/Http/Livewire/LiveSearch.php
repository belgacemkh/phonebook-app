<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\PhoneBook;

class LiveSearch extends Component
{
    public $name;

    public $contacts = [];

    public function updatedName($vale)
    {
        $this->contacts = PhoneBook::searchByName($vale);
    }
    
    public function render()
    {
        return view('livewire.live-search');
    }
}

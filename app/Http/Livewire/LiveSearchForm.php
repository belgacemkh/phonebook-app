<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\PhoneBook;

class LiveSearchForm extends Component
{
    public $name;

    public $contacts = [];

    public function searchByName()
    {
        sleep(1);
        $result = PhoneBook::searchByName($this->name?$this->name:'');

        if(empty($result) && !empty($this->name)){
            session()->flash('message', 'No contact matching "'.$this->name.'".');
        }

        $this->contacts = $result;
        
    }
    
    public function render()
    {
        return view('livewire.live-search-form');
    }
}

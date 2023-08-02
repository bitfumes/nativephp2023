<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Native\Laravel\Facades\Settings;

class AddReminder extends Component
{
    public $reminder;

    function add()
    {
        Settings::set('reminder', $this->reminder);
        $this->reminder = "";
    }

    public function render()
    {
        return view('livewire.add-reminder');
    }
}

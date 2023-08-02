<?php

namespace App\Http\Livewire;

use App\Models\Reminder;
use Livewire\Component;
use Native\Laravel\Facades\Settings;

class AddReminder extends Component
{
    public $reminder;

    function add()
    {
        Reminder::create([
            'reminder' => $this->reminder,
            'when'     => now()->addMinutes(5),
        ]);

        Settings::set('reminderCount', Reminder::count());
        $this->reminder = "";
    }

    public function render()
    {
        return view('livewire.add-reminder');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Reminder;
use Livewire\Component;
use Native\Laravel\Events\Settings\SettingChanged;

class Reminders extends Component
{
    public $reminders = [];

    function mount()
    {
        $this->reminders = Reminder::all();
    }

    protected $listeners = [
        'native:'.SettingChanged::class => 'addNew',
    ];

    public function addNew()
    {
        $this->reminders = Reminder::all();
    }

    public function render()
    {
        return view('livewire.reminders');
    }
}

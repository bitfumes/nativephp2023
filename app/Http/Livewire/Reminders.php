<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Native\Laravel\Events\Settings\SettingChanged;
use Native\Laravel\Facades\Settings;

class Reminders extends Component
{
    public $reminders = [];

    protected $listeners = [
        'native:'.SettingChanged::class => 'addNew',
    ];

    public function addNew()
    {
        $this->reminders[] = Settings::get('reminder');
        Settings::set('reminder', '');
    }

    public function render()
    {
        return view('livewire.reminders');
    }
}

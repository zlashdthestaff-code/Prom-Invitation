<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    public $name = '';
    public $attendance = 'yes'; // Default value

    protected $rules = [
        'name' => 'required|min:2|max:50',
        'attendance' => 'required|in:yes,no',
    ];

    public function submit()
    {
        $this->validate();

        Participant::create([
            'name' => $this->name,
            'attendance' => $this->attendance,
        ]);

        $this->reset(['name']);
        session()->flash('message', $this->attendance === 'yes' ? 'See you there! 🔥' : 'Response recorded. 😢');
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
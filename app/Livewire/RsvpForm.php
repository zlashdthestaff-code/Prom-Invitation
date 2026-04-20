<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    public $name = '';
    public $attendance = 'yes'; // Default selection

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
        
        $message = $this->attendance === 'yes' ? 'See you there! 🔥' : 'We will miss you! 😢';
        session()->flash('message', $message);
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
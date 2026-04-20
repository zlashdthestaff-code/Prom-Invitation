<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    // These MUST be public for wire:model to work
    public $name = '';
    public $message = '';

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:2',
            'message' => 'nullable',
        ]);

        Participant::create([
            'name' => $this->name,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'message']);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
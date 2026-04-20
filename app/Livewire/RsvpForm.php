<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    public $name = '';
    public $message = '';

    public function submit()
    {
        $this->validate(['name' => 'required|min:2']);

        Participant::create([
            'name' => $this->name,
            'message' => $this->message,
            'attendance' => 'yes', // Hardcoded for this button
        ]);

        $this->reset(['name', 'message']);
        session()->flash('message', 'See you there! 🔥');
        return redirect('/');
    }

    public function decline()
    {
        $this->validate(['name' => 'required|min:2']);

        Participant::create([
            'name' => $this->name,
            'message' => $this->message,
            'attendance' => 'no', // They aren't coming
        ]);

        $this->reset(['name', 'message']);
        session()->flash('message', 'We will miss you! 😢');
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
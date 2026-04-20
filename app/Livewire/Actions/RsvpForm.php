<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;
use Livewire\Attributes\Rule;

class RsvpForm extends Component
{
    #[Rule('required|min:2')]
    public $name = '';

    #[Rule('nullable|max:140')]
    public $message = '';

    public function submit()
    {
        $this->validate();

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
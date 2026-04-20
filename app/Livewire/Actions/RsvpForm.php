<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;
use Flux\Flux; // Keeping Flux for the toasts

class RsvpForm extends Component
{
    public $name = '';
    public $message = '';

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:2|max:50',
            'message' => 'nullable|max:140',
        ]);

        Participant::create([
            'name' => $this->name,
            'message' => $this->message,
        ]);

        Flux::toast(
            text: 'You are on the list, ' . $this->name . '!',
            heading: 'RSVP Success',
            variant: 'success'
        );

        $this->reset(['name', 'message']);
    }

    public function render()
    {
        return view('livewire.rsvp-form', [
            'participants' => Participant::latest()->get(),
        ]);
    }
}
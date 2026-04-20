<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    public $name = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:2|max:50',
        'message' => 'nullable|max:140',
    ];

    public function submit()
    {
        $this->validate();

        Participant::create([
            'name' => $this->name,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'message']);
        
        // This will refresh the page and show the new guest in the list
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
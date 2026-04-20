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
        
        session()->flash('message', 'Registration successful!');
        
        // Refresh the page to show the new name in the list
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
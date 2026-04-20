<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    public $name = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:2',
        'message' => 'required|min:2',
    ];

    public function submit()
    {
        $this->validate();

        Participant::create([
            'name' => $this->name,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'message']);
        
        session()->flash('message', 'Registered successfully!');
        
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
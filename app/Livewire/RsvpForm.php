<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class RsvpForm extends Component
{
    public string $name = '';
    public string $message = '';

    protected function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'message' => 'nullable|string|max:1000',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            Participant::create([
                'name' => $this->name,
                'message' => $this->message,
            ]);

            // Reset fields after save
            $this->reset(['name', 'message']);

            // Optional flash message (recommended instead of silent redirect)
            session()->flash('success', 'RSVP submitted successfully!');

            return redirect('/');

        } catch (\Exception $e) {
            // Log error for Railway debugging
            \Log::error('RSVP submission failed: ' . $e->getMessage());

            session()->flash('error', 'Something went wrong. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.rsvp-form');
    }
}
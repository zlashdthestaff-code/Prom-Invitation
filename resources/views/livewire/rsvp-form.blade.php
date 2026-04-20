<?php

use Livewire\Volt\Component;
use App\Models\Participant;
use Flux\Flux;

new class extends Component {
    public string $name = '';
    public string $message = '';

    public function with(): array
    {
        return [
            'participants' => Participant::latest()->limit(5)->get(),
        ];
    }

    public function save()
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
}; ?>

<div class="space-y-12">
    <section class="p-8 border border-white/20 shadow-2xl rounded-3xl bg-white/5 backdrop-blur-xl">
        <form wire:submit="save" class="space-y-5">
            <flux:input 
                wire:model="name" 
                label="Full Name" 
                placeholder="Enter your name"
                variant="filled" 
                class="bg-white/10 border-white/20 !text-white placeholder:text-white/40" 
                label-class="!text-white font-medium"
            />

            <flux:textarea 
                wire:model="message" 
                label="Leave a message" 
                placeholder="Can't wait for the night!" 
                rows="2" 
                class="bg-white/10 border-white/20 !text-white placeholder:text-white/40" 
                label-class="!text-white font-medium"
            />

            <flux:button 
                type="submit" 
                variant="primary" 
                class="w-full bg-amber-600 hover:bg-amber-500 !text-white font-bold py-6 transition-all active:scale-95 shadow-lg shadow-amber-900/20"
            >
                I'M ATTENDING 🥂
            </flux:button>
        </form>
    </section>

    <section class="space-y-6">
        <div class="flex items-center justify-center gap-4">
            <div class="h-px bg-gradient-to-r from-transparent to-amber-500/50 flex-1"></div>
            <h3 class="text-amber-500 font-serif italic text-2xl">The Guest List</h3>
            <div class="h-px bg-gradient-to-l from-transparent to-amber-500/50 flex-1"></div>
        </div>
        
        <div class="grid gap-4 max-h-[400px] overflow-y-auto pr-2 custom-scrollbar">
            @forelse($participants as $person)
                <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm flex flex-col items-start transition-all hover:bg-white/10">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-2 h-2 rounded-full bg-amber-500 shadow-[0_0_8px_rgba(245,158,11,0.8)]"></div>
                        <span class="font-bold text-white text-lg">{{ $person->name }}</span>
                    </div>
                    
                    @if($person->message)
                        <p class="text-white/80 text-sm leading-relaxed italic">
                            "{{ $person->message }}"
                        </p>
                    @endif
                    
                    <span class="mt-3 text-[10px] text-white/40 uppercase tracking-widest">
                        Joined {{ $person->created_at->diffForHumans() }}
                    </span>
                </div>
            @empty
                <div class="text-center py-10 border-2 border-dashed border-white/10 rounded-3xl">
                    <p class="text-white/40 italic">No guests yet. Be the first!</p>
                </div>
            @endforelse
        </div>
    </section>

    <style>
        /* Ensuring the browser displays the input text as pure white */
        input, textarea, {
            color: white !important;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(245, 158, 11, 0.5);
            border-radius: 10px;
        }
        [data-flux-label] {
        color: white !important;
        opacity: 0.9; /* Optional: adds a slight premium look */
    }
    </style>
</div>
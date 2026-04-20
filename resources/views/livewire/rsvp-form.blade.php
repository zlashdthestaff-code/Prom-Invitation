<div class="space-y-12">
    <section class="p-8 border border-white/10 shadow-2xl rounded-3xl bg-white/5 backdrop-blur-xl">
        <form wire:submit="submit" class="space-y-5">
            <flux:input 
                wire:model="name" 
                label="Full Name" 
                placeholder="Enter your name"
                variant="filled" 
                class="bg-white/5 border-white/10 text-white placeholder:text-white/20" 
            />

            <flux:textarea 
                wire:model="message" 
                label="Leave a message" 
                placeholder="Can't wait for the night!" 
                rows="2" 
                class="bg-white/5 border-white/10 text-white placeholder:text-white/20" 
            />

            <flux:button 
                type="submit" 
                variant="primary" 
                class="w-full bg-amber-600 hover:bg-amber-500 text-white font-bold py-6 transition-all active:scale-95"
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
                <div class="p-5 rounded-2xl bg-white/5 border border-white/5 backdrop-blur-sm flex flex-col items-start transition-all hover:bg-white/10">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></div>
                        <span class="font-bold text-amber-100 text-lg">{{ $person->name }}</span>
                    </div>
                    
                    @if($person->message)
                        <p class="text-white/60 text-sm leading-relaxed italic">
                            "{{ $person->message }}"
                        </p>
                    @endif
                    
                    <span class="mt-3 text-[10px] text-white/20 uppercase tracking-widest">
                        Joined {{ $person->created_at->diffForHumans() }}
                    </span>
                </div>
            @empty
                <div class="text-center py-10 border-2 border-dashed border-white/5 rounded-3xl">
                    <p class="text-white/30 italic">No guests yet. Be the first!</p>
                </div>
            @endforelse
        </div>
    </section>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: rgba(255, 255, 255, 0.05); border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(245, 158, 11, 0.3); border-radius: 10px; }
    </style>
</div>
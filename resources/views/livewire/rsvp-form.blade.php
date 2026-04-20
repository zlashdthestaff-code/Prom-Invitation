<div>
    @if (session()->has('message'))
        <div style="color: #4ade80; background: rgba(74, 222, 128, 0.1); padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-weight: bold;">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" style="display: flex; flex-direction: column; gap: 20px;">
        <div>
            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: rgba(255,255,255,0.9);">Full Name</label>
            <input type="text" wire:model="name" placeholder="Enter your name" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: white;">
            @error('name') <span style="color: #f87171; font-size: 0.8rem;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: rgba(255,255,255,0.9);">Will you attend?</label>
            <div style="display: flex; gap: 10px;">
                <button type="button" wire:click="$set('attendance', 'yes')" 
                    style="flex: 1; padding: 10px; border-radius: 8px; border: 2px solid {{ $attendance === 'yes' ? '#d4af37' : 'rgba(255,255,255,0.1)' }}; background: {{ $attendance === 'yes' ? 'rgba(212,175,55,0.1)' : 'transparent' }}; color: white; cursor: pointer; transition: 0.2s;">
                    YES ✅
                </button>
                <button type="button" wire:click="$set('attendance', 'no')" 
                    style="flex: 1; padding: 10px; border-radius: 8px; border: 2px solid {{ $attendance === 'no' ? '#f87171' : 'rgba(255,255,255,0.1)' }}; background: {{ $attendance === 'no' ? 'rgba(248,113,113,0.1)' : 'transparent' }}; color: white; cursor: pointer; transition: 0.2s;">
                    NO ❌
                </button>
            </div>
        </div>

        <button type="submit" 
                style="background: #b45309; color: white; padding: 15px; border: none; border-radius: 8px; font-weight: bold; font-size: 1rem; text-transform: uppercase; cursor: pointer; margin-top: 10px; transition: 0.3s;"
                onmouseover="this.style.background='#d97706'" onmouseout="this.style.background='#b45309'">
            Submit RSVP 🥂
        </button>
    </form>
</div>
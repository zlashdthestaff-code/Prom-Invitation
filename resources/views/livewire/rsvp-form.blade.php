<div>
    @if (session()->has('message'))
        <div style="color: #4ade80; background: rgba(74, 222, 128, 0.1); padding: 10px; border-radius: 8px; margin-bottom: 15px; text-align: center;">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" style="display: flex; flex-direction: column; gap: 15px;">
        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: rgba(255,255,255,0.9);">Full Name</label>
            <input type="text" wire:model="name" placeholder="Enter your name">
            @error('name') <span style="color: #f87171; font-size: 0.8rem;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: rgba(255,255,255,0.9);">Leave a message</label>
            <textarea wire:model="message" placeholder="Can't wait for the night!" rows="4"></textarea>
            @error('message') <span style="color: #f87171; font-size: 0.8rem;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" 
                style="background: #b45309; color: white; padding: 12px; border: none; border-radius: 8px; font-weight: bold; font-size: 1rem; text-transform: uppercase; cursor: pointer; transition: background 0.2s; letter-spacing: 0.05em;">
            I'M ATTENDING 🥂
        </button>
    </form>
</div>
<div style="width: 100%;">
    @if (session()->has('message'))
        <div style="color: #4ade80; background: rgba(74, 222, 128, 0.1); padding: 12px; border-radius: 12px; margin-bottom: 20px; text-align: center; font-size: 0.85rem;">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" style="width: 100%; display: flex; flex-direction: column; gap: 1.5rem;">
        <div style="width: 100%;">
            <label style="display: block; font-size: 0.8rem; font-weight: 600; color: #94a3b8; margin-bottom: 8px; margin-left: 4px;">FULL NAME</label>
            <input type="text" wire:model="name" placeholder="Name" 
                style="width: 100%; padding: 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.03); color: white; font-size: 16px; outline: none;">
            @error('name') <span style="color: #f87171; font-size: 0.7rem; margin-top: 5px; display: block;">{{ $message }}</span> @enderror
        </div>

        <div style="width: 100%;">
            <label style="display: block; font-size: 0.8rem; font-weight: 600; color: #94a3b8; margin-bottom: 8px; margin-left: 4px;">ATTENDANCE</label>
            <select wire:model="attendance" 
                style="width: 100%; padding: 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); background: #1f2937; color: white; font-size: 16px; cursor: pointer;">
                <option value="yes">Yes, I'm coming! ✅</option>
                <option value="no">No, I can't make it ❌</option>
            </select>
        </div>

        <button type="submit" 
                style="width: 100%; background: #b45309; color: white; padding: 16px; border: none; border-radius: 12px; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; cursor: pointer; letter-spacing: 0.05em; transition: 0.2s;">
            Submit 🥂
        </button>
    </form>
</div>
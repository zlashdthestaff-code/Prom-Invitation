<div style="width: 100%;">
    @if (session()->has('message'))
        <div style="color: #4ade80; background: rgba(74, 222, 128, 0.1); padding: 15px; border-radius: 12px; margin-bottom: 20px; text-align: center; font-weight: bold; font-size: 0.9rem;">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" style="display: flex; flex-direction: column; gap: 20px;">
        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-weight: 600; color: rgba(255,255,255,0.8); font-size: 0.9rem; margin-left: 4px;">Full Name</label>
            <input type="text" wire:model="name" placeholder="Enter your name" 
                style="width: 100%; padding: 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: white; font-size: 16px; -webkit-appearance: none;">
            @error('name') <span style="color: #f87171; font-size: 0.75rem; margin-left: 4px;">{{ $message }}</span> @enderror
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-weight: 600; color: rgba(255,255,255,0.8); font-size: 0.9rem; margin-left: 4px;">Will you attend?</label>
            <div style="position: relative;">
                <select wire:model="attendance" 
                    style="width: 100%; padding: 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); background: #1f2937; color: white; font-size: 16px; cursor: pointer; -webkit-appearance: none;">
                    <option value="yes">Yes, I'm coming! ✅</option>
                    <option value="no">No, I can't make it ❌</option>
                </select>
                <div style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); pointer-events: none; color: rgba(255,255,255,0.4);">
                    ▼
                </div>
            </div>
        </div>

        <button type="submit" 
                style="background: #b45309; color: white; padding: 16px; border: none; border-radius: 12px; font-weight: bold; font-size: 1rem; text-transform: uppercase; cursor: pointer; margin-top: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2); active: transform: scale(0.98);">
            Confirm RSVP 🥂
        </button>
    </form>
</div>
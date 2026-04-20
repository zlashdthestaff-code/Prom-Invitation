<!DOCTYPE html>
<html lang="en" class="dark" style="background-color: #0b1120;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prom Night Invitation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        body { background-color: #0b1120 !important; color: white !important; font-family: sans-serif; }
        .gold-text { color: #d4af37 !important; }
        .card-bg { background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(212, 175, 55, 0.2); padding: 20px; border-radius: 15px; }
    </style>
</head>
<body class="antialiased min-h-screen p-8">
    <div class="max-w-2xl mx-auto text-center mb-10">
        <h1 class="text-4xl font-bold gold-text">PROM NIGHT</h1>
        <p class="text-gray-400">SMK Negeri 1 Tanjungpinang</p>
    </div>

    <div class="max-w-md mx-auto card-bg mb-10">
        {{-- Make sure this component exists in app/Livewire/RsvpForm.php --}}
        @livewire('rsvp-form')
    </div>

    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold gold-text mb-6 text-center">Guest List</h2>
        <div class="grid gap-4">
            @forelse($guests as $participant)
                <div class="card-bg">
                    <h3 class="font-bold gold-text">{{ $participant->name }}</h3>
                    <p class="text-gray-300 italic">"{{ $participant->message }}"</p>
                </div>
            @empty
                <p class="text-center opacity-50">No one has joined the party yet!</p>
            @endforelse
        </div>
    </div>

    @livewireScripts
</body>
</html>
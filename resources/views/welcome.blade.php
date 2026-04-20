<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" style="background-color: #0b1120;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prom Night Invitation</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Extra failsafe styles in case CSS load is slow */
        body {
            background-color: #0b1120 !important;
            color: white !important;
            margin: 0;
            font-family: 'Instrument Sans', sans-serif;
        }
        .gold-text { color: #d4af37 !important; }
        .card-bg { background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(212, 175, 55, 0.2); }
    </style>
</head>
<body class="antialiased min-h-screen">
    <div class="relative py-12 px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center mb-12">
            <p class="gold-text font-medium tracking-widest uppercase mb-2">Official Invitation</p>
            <h1 class="text-5xl font-extrabold tracking-tight mb-4">PROM NIGHT</h1>
            <p class="text-xl text-gray-400">SMK Negeri 1 Tanjungpinang</p>
        </div>

        <div class="max-w-md mx-auto card-bg p-8 rounded-2xl shadow-2xl mb-16">
            @livewire('rsvp-form')
        </div>

        <div class="max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold text-center gold-text mb-8">The Guest List</h2>
            
            <div class="grid gap-4">
                @forelse($guests as $guest)
                    <div class="card-bg p-6 rounded-xl transition-all hover:scale-[1.02]">
                        <h3 class="text-lg font-bold gold-text">{{ $guest->name }}</h3>
                        <p class="text-gray-300 mt-1 italic">"{{ $guest->message }}"</p>
                    </div>
                @empty
                    <div class="text-center py-10 opacity-50">
                        <p>No guests yet. Be the first to join!</p>
                    </div>
                @endforelse
            </div>
        </div>

        <footer class="mt-20 text-center text-gray-500 text-sm">
            &copy; 2026 SMK Negeri 1 Tanjungpinang • Class of XII TKJ
        </footer>
    </div>
</body>
</html>
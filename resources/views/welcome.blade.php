<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

        <title>Prom Night 2026</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:900" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-[#020205] text-white overflow-x-hidden selection:bg-amber-500/30">
        
        <div class="fixed inset-0 z-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-indigo-950 via-slate-950 to-black"></div>

        <div class="relative z-10 min-h-screen flex flex-col items-center justify-start pt-12 pb-20 px-4">
            
            <header class="text-center mb-8 w-full">
                <div class="inline-block px-4 py-1 border border-amber-500/20 rounded-full bg-amber-500/5 text-amber-500 text-[10px] tracking-[0.3em] uppercase mb-6">
                    Official Invitation
                </div>
                
                <h1 class="text-4xl lg:text-7xl font-serif text-transparent bg-clip-text bg-gradient-to-b from-amber-200 to-amber-600 font-black tracking-tight mb-3">
                    PROM NIGHT
                </h1>
                
                <p class="text-xs lg:text-lg font-light text-white/50 tracking-[0.2em] uppercase px-4">
                    SMK Negeri 1 Tanjungpinang
                </p>
            </header>

            <main class="w-full max-w-md">
                <livewire:rsvp />
            </main>

            <footer class="mt-auto pt-10 text-white/20 text-[10px] tracking-widest uppercase" style="color: white; font-size: 20px;" >
                &copy; 2026 Astraevo
            </footer>

        </div>

        <flux:toast />

        <style>
            h1 { font-family: 'Playfair Display', serif; }
            /* Prevents inputs from zooming in on iPhone */
            input, textarea { font-size: 16px !important; } 
        </style>
    </body>
</html>
<!DOCTYPE html>
<html lang="en" class="dark" style="background-color: #0b1120;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prom Night Invitation</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|playfair-display:700" rel="stylesheet" />

    @livewireStyles
    <style>
        :root {
            --bg-color: #0b1120;
            --card-bg: #111827;
            --gold-text: #d4af37;
            --body-text: #e2e8f0;
        }
        body {
            background-color: var(--bg-color) !important;
            color: var(--body-text) !important;
            font-family: 'Instrument Sans', sans-serif;
            margin: 0;
            min-height: 100vh;
            padding: 2rem;
        }
        .playfair { font-family: 'Playfair Display', serif; }
        .gold-text { color: var(--gold-text) !important; }
        
        .header-section { max-width: 672px; margin: 0 auto 3rem; text-align: center; }
        .gold-label { text-transform: uppercase; letter-spacing: 0.2em; font-size: 0.8rem; border: 1px solid rgba(212,175,55,0.4); padding: 5px 15px; border-radius: 9999px; display: inline-block; }
        .prom-title { font-size: 4rem; text-transform: uppercase; line-height: 1; margin: 1rem 0; }
        
        .card-rsvp { max-width: 448px; margin: 0 auto 4rem; background-color: var(--card-bg); padding: 2rem; border-radius: 1rem; border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 10px 15px -3px rgba(0,0,0,0.3); }
        
        .card-guest { max-width: 672px; margin: 0 auto 1rem; background-color: var(--card-bg); padding: 1.5rem; border-radius: 1rem; border: 1px solid rgba(212,175,55,0.1); }
        .guest-message { color: rgba(255,255,255,0.7); font-style: italic; margin-top: 5px; }

        input, textarea { width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.03); color: white; box-sizing: border-box; }
        input:focus, textarea:focus { border-color: var(--gold-text); outline: none; }
    </style>
</head>
<body>
    
    <div class="header-section">
        <div class="gold-text gold-label">Official Invitation</div>
        <h1 class="prom-title playfair gold-text">Prom Night</h1>
        <p class="text-xl text-gray-400">SMK Negeri 1 Tanjungpinang</p>
    </div>

    <div class="card-rsvp">
        @livewire('rsvp-form')
    </div>

    <div class="header-section" style="margin-bottom: 2rem;">
        <h2 class="text-3xl font-bold playfair gold-text">The Guest List</h2>
    </div>

    @isset($guests)
        <div style="display: flex; flex-direction: column; align-items: center;">
            @forelse($guests as $participant)
                <div class="card-guest" style="width: 100%;">
                    <div style="display: flex; justify-content: space-between; align-items: start;">
                        <div>
                            <h3 class="text-lg font-bold gold-text" style="margin: 0;">{{ $participant->name }}</h3>
                            <p class="guest-message">"{{ $participant->message }}"</p>
                        </div>
                        <span style="font-size: 0.7rem; color: rgba(255,255,255,0.3); text-transform: uppercase; letter-spacing: 0.1em; white-space: nowrap; margin-left: 10px;">
                            {{ $participant->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            @empty
                <div style="text-align: center; opacity: 0.5;">No guests yet. Be the first!</div>
            @endforelse
        </div>
    @endisset

    @livewireScripts
</body>
</html>
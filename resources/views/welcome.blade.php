<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Prom Night Invitation</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|playfair-display:700" rel="stylesheet" />

    @livewireStyles
    <style>
        /* The Global Reset */
        * {
            box-sizing: border-box; /* Crucial: Padding won't push width anymore */
            margin: 0;
            padding: 0;
        }

        :root {
            --bg-color: #0b1120;
            --card-bg: #111827;
            --gold-text: #d4af37;
        }

        body {
            background-color: var(--bg-color);
            color: #e2e8f0;
            font-family: 'Instrument Sans', sans-serif;
            min-height: 100vh;
            width: 100%;
            overflow-x: hidden; /* Prevent horizontal scrolling */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Vertical center */
            padding: 20px;
        }

        .header-section {
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin-bottom: 2rem;
        }

        .prom-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 10vw, 4rem); /* Responsive font size */
            color: var(--gold-text);
            text-transform: uppercase;
            line-height: 1.1;
            margin: 1rem 0;
        }

        .card-rsvp {
            width: 100%;
            max-width: 400px; /* Locked width for mobile */
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: 1.5rem;
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);
        }

        .gold-label {
            color: var(--gold-text);
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-size: 0.7rem;
            border: 1px solid rgba(212,175,55,0.3);
            padding: 4px 12px;
            border-radius: 999px;
            display: inline-block;
        }
    </style>
</head>
<body>
    
    <div class="header-section">
        <div class="gold-label">Official Invitation</div>
        <h1 class="prom-title">Prom Night</h1>
        <p style="color: #94a3b8;">SMK Negeri 1 Tanjungpinang</p>
    </div>

    <div class="card-rsvp">
        @livewire('rsvp-form')
    </div>

    <footer style="margin-top: 2rem; opacity: 0.3; font-size: 0.6rem; letter-spacing: 0.2em; text-transform: uppercase;">
        &copy; 2026 Astraevo
    </footer>

    @livewireScripts
</body>
</html>
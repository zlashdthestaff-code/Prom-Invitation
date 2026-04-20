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
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg-color: #0b1120;
            --card-bg: #111827;
            --gold-text: #d4af37;
        }

        body {
            /* The GIF implementation */
            background-image: url('{{ asset("images/star.gif") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-color: var(--bg-color); 
            
            color: #e2e8f0;
            font-family: 'Instrument Sans', sans-serif;
            min-height: 100vh;
            width: 100%;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        /* The Dark Overlay - Keeps the UI readable over the blinking GIF */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(11, 17, 32, 0.7); /* Adjust darkness here */
            z-index: 0;
        }

        .header-section, .card-rsvp, footer {
            position: relative;
            z-index: 1; /* Pushes content above the overlay */
        }

        .header-section {
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin-bottom: 2rem;
        }

        .prom-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.8rem, 12vw, 4rem);
            color: var(--gold-text);
            text-transform: uppercase;
            line-height: 1.1;
            margin: 1rem 0;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .card-rsvp {
            width: 100%;
            max-width: 400px;
            background-color: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: 1.5rem;
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
        }

        .gold-label {
            color: var(--gold-text);
            text-transform: uppercase;
            letter-spacing: 0.25em;
            font-size: 0.7rem;
            border: 1px solid rgba(212,175,55,0.4);
            padding: 5px 15px;
            border-radius: 999px;
            display: inline-block;
            background: rgba(212,175,55,0.05);
        }
    </style>
</head>
<body>
    
    <div class="header-section">
        <div class="gold-label">Official Invitation</div>
        <h1 class="prom-title">Prom Night</h1>
        <p style="color: #94a3b8; letter-spacing: 0.1em; font-weight: 500;">SMK Negeri 1 Tanjungpinang</p>
    </div>

    <div class="card-rsvp">
        @livewire('rsvp-form')
    </div>

    <footer style="margin-top: 2rem; opacity: 0.4; font-size: 0.65rem; letter-spacing: 0.25em; text-transform: uppercase; font-weight: 600;">
        &copy; 2026 Astraevo
    </footer>

    @livewireScripts
</body>
</html>
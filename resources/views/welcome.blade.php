<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prom Night</title>
    @livewireStyles
    <style>
        body { background-color: #0b1120; color: #d4af37; font-family: sans-serif; text-align: center; padding: 50px; }
        .card { background: rgba(255,255,255,0.1); border: 1px solid gold; padding: 20px; border-radius: 10px; margin: 20px auto; max-width: 400px; }
    </style>
</head>
<body>
    <h1>PROM NIGHT 2026</h1>
    <p>SMK Negeri 1 Tanjungpinang</p>

    <div class="card">
        @livewire('rsvp-form')
    </div>

    <h2>Guest List</h2>
    @isset($guests)
        @foreach($guests as $p)
            <div class="card">
                <strong>{{ $p->name }}</strong>: {{ $p->message }}
            </div>
        @endforeach
    @endisset

    @livewireScripts
</body>
</html>
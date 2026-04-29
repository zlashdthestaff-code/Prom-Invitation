<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Prom Admin Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; padding: 40px 0; }
        .admin-card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .btn-filter { margin-right: 5px; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body>

<div class="container admin-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Registration Records</h1>
            <p class="text-muted">Viewing: <strong>{{ request('status') == 'yes' ? 'Attending Only' : 'All Responses' }}</strong> ({{ $guests->count() }})</p>
        </div>
        <button onclick="window.print()" class="btn btn-outline-secondary no-print">Print / PDF</button>
    </div>

    <div class="mb-4 no-print">
        <span class="me-2 fw-bold">Show:</span>
        <a href="{{ url()->current() }}?key=prom2026" 
           class="btn btn-sm {{ request('status') != 'yes' ? 'btn-dark' : 'btn-outline-dark' }}">
           All
        </a>
        <a href="{{ url()->current() }}?key=prom2026&status=yes" 
           class="btn btn-sm {{ request('status') == 'yes' ? 'btn-success' : 'btn-outline-success' }}">
           Yes (Attending)
        </a>
    </div>

    <table class="table table-hover border">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Attendance</th>
                <th>Message</th>
                <th>Date Registered</th>
            </tr>
        </thead>
        <tbody>
            @forelse($guests as $index => $guest)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td class="fw-bold">{{ $guest->name }}</td>
                <td>
                    <span class="badge {{ $guest->attendance == 'yes' ? 'bg-success' : 'bg-danger' }}">
                        {{ ucfirst($guest->attendance) }}
                    </span>
                </td>
                <td><small>{{ $guest->message ?? '-' }}</small></td>
                <td>{{ $guest->created_at->format('M d, Y - H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-5 text-muted">No records found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
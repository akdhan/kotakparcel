<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kontrol IoT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .switch-label {
            font-weight: bold;
            font-size: 1.2rem;
            margin-left: 10px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4">Dashboard Kontrol</h2>
    <div class="row g-3">

        {{-- Sistem --}}
        <div class="col-md-4">
            <div class="card p-3">
                <span class="mb-2">Sistem</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="sistemSwitch"
                           onchange="togglePin('V1', this)" {{ $sistem == 1 ? 'checked' : '' }}>
                    <label class="form-check-label switch-label" for="sistemSwitch">Manual</label>
                </div>
            </div>
        </div>

        {{-- Solenoid --}}
        <div class="col-md-4">
            <div class="card p-3">
                <span class="mb-2">Solenoid</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="solenoidSwitch"
                           onchange="togglePin('V2', this)" {{ $solenoid == 1 ? 'checked' : '' }}>
                    <label class="form-check-label switch-label" for="solenoidSwitch"></label>
                </div>
            </div>
        </div>

        {{-- Buzzer --}}
        <div class="col-md-4">
            <div class="card p-3">
                <span class="mb-2">Buzzer</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="buzzerSwitch"
                           onchange="togglePin('V4', this)" {{ $buzzer == 1 ? 'checked' : '' }}>
                    <label class="form-check-label switch-label" for="buzzerSwitch"></label>
                </div>
            </div>
        </div>

        {{-- Status QR --}}
        <div class="col-md-4">
            <div class="card p-3">
                <span class="mb-2">QR</span>
                <h4 class="mt-2">{{ $qr }}</h4>
            </div>
        </div>
        <a href="{{ route('welcome') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<script>
    function togglePin(pin, checkbox) {
        const value = checkbox.checked ? 1 : 0;
        fetch('/blynk/update', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ pin: pin, value: value })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status !== 'success') {
                alert('Gagal mengirim perintah ke Blynk!');
            }
        })
        .catch(error => {
            alert('Terjadi kesalahan koneksi!');
            checkbox.checked = !checkbox.checked; // revert
        });
    }
</script>

</body>
</html>

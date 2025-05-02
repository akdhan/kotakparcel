<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Paket</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Barang: {{ $paket->nama_barang }}</h5>
                <p class="card-text"><strong>Nama Penerima:</strong> {{ $paket->nama_penerima }}</p>
                <p class="card-text"><strong>Nomor Resi:</strong> {{ $paket->nomor_resi }}</p>
                <p class="card-text"><strong>Ekspedisi:</strong> {{ $paket->ekspedisi }}</p>
                <p class="card-text"><strong>Tanggal Pemesanan:</strong> {{ $paket->tanggal_pemesanan }}</p>
                <p class="card-text"><strong>E-Commerce:</strong> {{ $paket->e_commerce }}</p>
                <p class="card-text"><strong>Berat Barang:</strong> {{ $paket->berat_barang }} kg</p>
                <a href="{{ route('pakets.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('pakets.edit', $paket->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pakets.destroy', $paket->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
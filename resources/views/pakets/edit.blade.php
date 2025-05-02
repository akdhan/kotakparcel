<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Paket</h1>
        <form action="{{ route('pakets.update', $paket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $paket->nama_barang }}" required>
            </div>
            <div class="form-group">
                <label for="nama_penerima">Nama Penerima</label>
                <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" value="{{ $paket->nama_penerima }}" required>
            </div>
            <div class="form-group">
                <label for="nomor_resi">Nomor Resi</label>
                <input type="text" class="form-control" id="nomor_resi" name="nomor_resi" value="{{ $paket->nomor_resi }}" required>
            </div>
            <div class="form-group">
                <label for="ekspedisi">Ekspedisi</label>
                <select class="form-control" id="ekspedisi" name="ekspedisi" required>
                    <option value="JNE" {{ $paket->ekspedisi == 'JNE' ? 'selected' : '' }}>JNE</option>
                    <option value="JNT" {{ $paket->ekspedisi == 'JNT' ? 'selected' : '' }}>JNT</option>
                    <option value="TIKI" {{ $paket->ekspedisi == 'TIKI' ? 'selected' : '' }}>TIKI</option>
                    <option value="POS" {{ $paket->ekspedisi == 'POS' ? 'selected' : '' }}>POS</option>
                    <option value="SHOPEE" {{ $paket->ekspedisi == 'SHOPEE' ? 'selected' : '' }}>SHOPEE</option>
                    <option value="GRAB" {{ $paket->ekspedisi == 'GRAB' ? 'selected' : '' }}>GRAB</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" value="{{ $paket->tanggal_pemesanan }}" required>
            </div>
            <div class="form-group">
                <label for="e_commerce">E-Commerce</label>
                <input type="text" class="form-control" id="e_commerce" name="e_commerce" value="{{ $paket->e_commerce }}" required>
            </div>
            <div class="form-group">
                <label for="berat_barang">Berat Barang (kg)</label>
                <input type="number" class="form-control" id="berat_barang" name="berat_barang" step="0.01" value="{{ $paket->berat_barang }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pakets.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
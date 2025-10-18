<!DOCTYPE html>
<html>
<head>
    <title>Halaman Produk</title>
    <!-- Tambahkan Bootstrap agar alert rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Halaman Produk</h2>

        <!-- Panggil komponen Alert -->
        <x-alert type="{{ $type }}">
            {{ $message }}
        </x-alert>
    </div>
</body>
</html>

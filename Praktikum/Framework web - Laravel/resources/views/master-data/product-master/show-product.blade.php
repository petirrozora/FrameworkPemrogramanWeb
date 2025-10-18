<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Detail Produk</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama Produk:</strong> {{ $product->product_name }}</p>
            <p><strong>Unit:</strong> {{ $product->unit }}</p>
            <p><strong>Tipe:</strong> {{ $product->type }}</p>
            <p><strong>Keterangan:</strong> {{ $product->information }}</p>
            <p><strong>Qty:</strong> {{ $product->qty }}</p>
            <p><strong>Produsen:</strong> {{ $product->producer }}</p>
        </div>
    </div>

    <a href="{{ route('product.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html>

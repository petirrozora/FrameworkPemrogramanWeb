<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Produk</h2>
    <a href="{{ route('product.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>

        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" name="unit" class="form-control" value="{{ $product->unit }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipe</label>
            <input type="text" name="type" class="form-control" value="{{ $product->type }}" required>
        </div>

        <div class="mb-3">
            <label for="information" class="form-label">Keterangan</label>
            <textarea name="information" class="form-control">{{ $product->information }}</textarea>
        </div>

        <div class="mb-3">
            <label for="qty" class="form-label">Kuantitas</label>
            <input type="number" name="qty" class="form-control" value="{{ $product->qty }}" required>
        </div>

        <div class="mb-3">
            <label for="producer" class="form-label">Produsen</label>
            <input type="text" name="producer" class="form-control" value="{{ $product->producer }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

        <h2 class="mb-4">Daftar Produk</h2>

        {{-- ✅ Alert sukses atau error --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- ✅ Tombol tambah produk --}}
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

        {{-- ✅ Tabel Produk --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Unit</th>
                    <th>Tipe</th>
                    <th>Keterangan</th>
                    <th>Qty</th>
                    <th>Produsen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->unit }}</td>
                        <td>{{ $product->type }}</td>
                        <td>{{ $product->information }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->producer }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">Menu UTS Pemrograman Web</h1>

    <p class="text-gray-700 mb-4">
        Ini adalah halaman untuk mata kuliah Pemrograman Web.
    </p>

    <a href="{{ route('uts.index') }}"
       class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600 transition">
       ← Kembali ke Daftar UTS
    </a>
</div>
@endsection

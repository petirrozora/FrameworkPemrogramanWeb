@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-green-600 mb-4">Menu UTS Database</h1>

    <p class="text-gray-700 mb-4">
        Ini adalah halaman untuk mata kuliah Database.
    </p>

    <a href="{{ route('uts.index') }}"
       class="px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600 transition">
       ← Kembali ke Daftar UTS
    </a>
</div>
@endsection

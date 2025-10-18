@extends('layouts.app')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4 text-white">Daftar Mata Kuliah UTS</h1>

        <table class="table-auto w-full border-collapse bg-white shadow-md rounded">
            <thead>
                <tr class="bg-blue-600 text-black">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nama Matkul</th>
                    <th class="px-4 py-2">Jumlah SKS</th>
                    <th class="px-4 py-2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $row->uts_id }}</td>
                    <td class="px-4 py-2">{{ $row->nama_matkul }}</td>
                    <td class="px-4 py-2">{{ $row->jumlah_sks }}</td>
                    <td class="px-4 py-2">{{ $row->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex gap-4 mt-6">
            <a href="{{ route('uts.web') }}"
               class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                Menu UTS Pemrograman Web
            </a>
            <a href="{{ route('uts.database') }}"
               class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition">
                Menu UTS Database
            </a>
        </div>
    </div>
@endsection

@extends('utama')

@section('judul_menu')
    <p>ini ditampilkan dari section judul menu, dengan data :{{ $isi_data }}</p>

    @if ($isi_data>20)
        <p>Isi data lebih dari 20</p>

    @elseif ($isi_data>15)
        <P>Isi data lebih dari 25</P>
    @else
        <p>Isi data kurang dari 15</p>
    @endif

@endsection

@section('isi_menu')
    ini isi dari section isi menu
@endsection

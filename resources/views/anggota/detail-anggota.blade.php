@extends('main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
    <div class="container">
        <div class="jumbotron">
        
            <h1 class="display-6">Detail Anggota</h1>
            <hr class="my-2">     

            <table class="table">
                @forelse ($dataAnggota as $angg)
                <tr>
                    <th style="border:0">Nama</th>
                    <td style="border:0">:</td>
                    <td style="border:0">{{ $angg['nama'] }}</td>
                </tr>
                    <tr>
                    <th style="border:0">Alamat</th>
                    <td style="border:0">:</td>
                    <td style="border:0">{{ $angg['alamat'] }}</td>
                </tr>
                <tr>
                    <th style="border:0">Jenis Kelamin</th>
                    <td style="border:0">:</td>
                    <td style="border:0">{{ $angg['jk'] }}</td>
                </tr>
                <tr>
                    <th style="border:0">Email</th>
                    <td style="border:0">:</td>
                    <td style="border:0">{{ $angg['email'] }}</td>
                </tr>
                <tr>
                    <th style="border:0">No. Telp</th>
                    <td style="border:0">:</td>
                    <td style="border:0">{{ $angg['nohp'] }}</td>
                </tr>
                @empty
                    <td colspan="3">Tidak dapat menampilkan detail data</td>
                @endforelse
            </table>
        </div>
    </div>
@endsection
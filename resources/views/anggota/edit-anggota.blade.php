@extends('main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Edit Data Anggota</h1>
            <hr class="my-4">
            <div class="card-body">

                @if ($msg = Session::get('msg'))
                    <div class="alert alert-success">
                        <span>{{ $msg }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>                        
                    </div>
                @endif

            
            @foreach ($dataAnggota as $item)
            <form action="{{ route('anggota.update', $item['nama']) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama" name="anggota" placeholder="Nama Anggota" value="{{ $item['nama'] }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anggota" value="{{ $item['alamat'] }}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jk" name="jk" value="{{ $item['jk'] }}">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $item['email'] }}">
                </div>
                <div class="form-group">
                    <label for="no_telp">No. HP</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="NO. HP" value="{{ $item['nohp'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
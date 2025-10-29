@extends('layouts.app')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Dosen</h1>
    <a href="" class="btn btn-primary mb-4">Tambah Dosen</a>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Dosen</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('dosen.update', $dosen->id) }}" method="post">

            @csrf
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="namadosen" name="nama_dosen" placeholder="masukan nama dosen" value="{{ $dosen->nama_dosen }}">
                </div>

                <div class="form-group">
                    <label for="dosen_prodi">Dosen Prodi</label>
                    <input type="text" class="form-control" id="dosenprodi" name="dosen_prodi" placeholder="masukan dosen prodi mana" value="{{ $dosen->dosen_prodi }}">
                </div>

                 <div class="form-group">
                    <label for="nidn">NIDN</label>
                    <input type="text" class="form-control" id="nidn" name="nidn" placeholder="masukan nidn dosen" value="{{ $dosen->nidn }}">
                </div>

                <div class="form-group">

                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </div>
                




            </form>
        </div>
    </div>

</div>





@endsection
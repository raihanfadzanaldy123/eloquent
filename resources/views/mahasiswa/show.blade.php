@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">T
                    Tambah Data Dosen
                </div>
                <div class="card-body">
                    <form action="{{route('dosen.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nama" value="{{$dosen->nama}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomer Induk Pegawai Dosen</label>
                            <input type="text" name="nipd" value="{{$dosen->nipd}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" t class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Hobi
                </div>
                <div class="card-body">
                    <form action="{{route('mhs.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="mhs" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">NamNomer Induk Mahasiswa</label>
                            <input type="text" name="mhs" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">T
                    Tambah Data Edit
                </div>
                <div class="card-body">
                    <form action="{{route('edit.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama edit</label>
                            <input type="text" name="hobi" value="{{$edit->hobi}}" class="form-control" readonly>
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

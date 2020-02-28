@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">
                    Data Hobi
                <a href="{{route('hobi.create')}}" class="float-right"> Tambah Data </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomer</th>
                                    <th>Hobi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($hobi as $data)
                                    <tr>
                                        <td> {{$no++}}       </td>
                                        <td> {{$data->hobi}} </td>
                                        <td>
                                <form action="{{route('hobi.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <a href="{{route('hobi.show',$data->id)}}" class="btn btn-outline-success"> Lihat</a>
                                        <a href="{{route('hobi.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                                        <button type="submit" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

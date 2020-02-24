<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eloquent</title>
</head>
<body>
    @foreach($mahasiswa as $data)
<h3> {{$data->nama}} <small>({{$data->nim}})</small></h3>
    <h4>Hobi :
        @foreach($data->hobi as $val)
    <small>{{$val->hobi}}</small>
        @endforeach
    </h4>

    <h4>
        <li>
            Nama Wali : <b> {{$data->wali->nama}} </b>
            </li>
        <li>
            Dosen Pembimbing : <b> {{$data->dosen->nama}} </b>
            </li>
        <li>
            hobi : <b> {{$data->hobi}} </b>
        </li>
    </h4> <hr>
@endforeach

</body>
</html>


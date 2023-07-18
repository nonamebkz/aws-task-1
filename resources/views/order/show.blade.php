@extends("layout/aplikasi")

@section("content")
    <div>
        <a href="/order" class="btn btn-secondary">kembali</a>
        <h1>{{$data->order_nama}}</h1>
        <p><b>status</b> {{$data->status_code}}</p>
    </div>
@endsection

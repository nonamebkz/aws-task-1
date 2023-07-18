@extends("layout/aplikasi")

@section("content")
    <div>
        <a href="/service" class="btn btn-secondary">back</a>
        <br>
        <h1>{{$data->service_name}}</h1>
        <img src="{{'/service_image/'.$data->service_image}}" style="max-height: 100px; max-width: 100px;"/>
        <p><b>description</b> {{$data->service_description}}</p>
        <p><b>price</b> $ {{$data->service_price}}</p>
    </div>
@endsection

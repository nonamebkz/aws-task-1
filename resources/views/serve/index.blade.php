@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layout/aplikasi')

@section('content')
    <div class="row row-cols-1 row-cols-md-2">
        @foreach($data as $item)
            <div class="col-md-4" style="padding: 10px">
                <div class="card">
{{--                    <img style="max-width: 50%;max-height: 50%" src="{{url('images').'/'.$item->service_image}}"--}}
{{--                         class="card-img-top" alt="Service Image">--}}
                    <div class="card-body">
                        <h5 class="card-title">{{$item->service_name}}</h5>
                        <p class="card-text">{{$item->service_description}}</p>
                        <h6 class="card-subtitle mb-2 text-muted">{{$item->service_price}}</h6>
                        <form method="post" action="/serve-order">
                            @csrf
                            <input hidden name="service_id" value="{{$item->id}}">
                            <input hidden name="user_id" value="{{Auth::user()->id}}">
                            <input hidden name="status_code" value="1">
                            @if($item->flag==1)
                                <p>Order is process</p>
                            @elseif($item->flag==2)
                                <p>already Approve</p>
                            @elseif($item->flag==3)
                                <p>Cancle</p>
                            @else
                                <button class="btn btn-primary">Order</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$data->links()}}

@endsection

@php use Illuminate\Support\Facades\Session; @endphp
@extends("layout/aplikasi")

@section("content")
    <form method="post"
          action="{{'/order/'.$data->order_no}}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>order no : {{$data->order_no}}</h1>
        </div>
        <div class="mb-3">
            <label for="order_name" class="form-label">Order Name</label>
            <input type="text"
                   class="form-control"
                   id="order_no"
                   name="order_nama"
                   aria-describedby="order_nama"
                   placeholder="Enter Order Name"
                   value="{{$data->order_nama}}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text"
                   class="form-control"
                   id="status_code"
                   name="status_code"
                   aria-describedby="status"
                   placeholder="Status"
                   value="{{$data->status_code}}">
        </div>
        @if($data->foto)
            <div class="mb-3">
                <img style="max-width: 50px;max-height: 50px" src="{{url('foto').'/'.$data->foto}}">
            </div>
        @endif
        <div class="mb-3">
            <label for="foto" class="form-label">Status</label>
            <input type="file"
                   class="form-control"
                   id="foto"
                   name="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection

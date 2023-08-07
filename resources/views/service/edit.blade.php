@php use Illuminate\Support\Facades\Session; @endphp
@extends("layout/aplikasi")

@section("content")
    <form method="post"
          action="{{$data->id}}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>service Id : {{$data->id}}</h1>
        </div>
        <div class="mb-3">
            <label for="order_name" class="form-label">Service Name</label>
            <input type="text"
                   class="form-control"
                   id="service_name"
                   name="service_name"
                   aria-describedby="service_name"
                   placeholder="Enter Service Name"
                   value="{{$data->service_name}}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Service Description</label>
            <textarea
                class="form-control"
                id="service_description"
                rows="3"
                name="service_description">
{{$data->service_description}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Service Price</label>
            <input type="number"
                   class="form-control"
                   id="service_price"
                   name="service_price"
                   aria-describedby="service_price"
                   placeholder="service_price"
                   value="{{$data->service_price}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection

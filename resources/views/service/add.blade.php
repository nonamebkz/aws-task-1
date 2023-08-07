@php use Illuminate\Support\Facades\Session; @endphp
@extends("layout/aplikasi")

@section("content")
    <form method="post" action="create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="order_no" class="form-label">Service Name</label>
            <input type="text"
                   class="form-control"
                   id="service_name"
                   name="service_name"
                   value="{{Session::get('service_name')}}">
        </div>
        <div class="mb-3">
            <label for="order_name" class="form-label">Service Description</label>
            <textarea
                class="form-control"
                id="service_description"
                rows="3"
                name="service_description">
                {{Session::get('service_description')}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="service_price" class="form-label">Service Price</label>
            <input type="number"
                   class="form-control"
                   id="service_price"
                   name="service_price"
                   value="{{Session::get('service_price')}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection

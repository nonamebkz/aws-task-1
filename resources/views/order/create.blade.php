@php use Illuminate\Support\Facades\Session; @endphp
@extends("layout/aplikasi")

@section("content")
    <form method="post" action="/order" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="order_no" class="form-label">Order No</label>
            <input type="text"
                   class="form-control"
                   id="order_no"
                   name="order_no"
                   aria-describedby="order_no"
                   placeholder="Enter Order No"
                   value="{{Session::get('order_no')}}">
        </div>
        <div class="mb-3">
            <label for="order_name" class="form-label">Order Name</label>
            <input type="text"
                   class="form-control"
                   id="order_no"
                   name="order_nama"
                   aria-describedby="order_nama"
                   placeholder="Enter Order Name"
                   value="{{Session::get('order_nama')}}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text"
                   class="form-control"
                   id="status_code"
                   name="status_code"
                   aria-describedby="status"
                   placeholder="Status"
                   value="{{Session::get('status_code')}}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file"
                   class="form-control"
                   id="foto"
                   name="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection

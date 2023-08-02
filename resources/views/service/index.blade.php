@extends("layout/aplikasi")

@section("content")
<a href="/service/add"
   class="btn btn-primary">+ Add Data Service</a>
    <table class="table">
        <thead>
        <tr>
{{--            <th>Picture</th>--}}
            <th>Service Name</th>
            <th>Service Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
{{--                <td>@if($item->service_image)--}}
{{--                        <img style="max-width: 50px;max-height: 50px"--}}
{{--                             src="{{url('images').'/'.$item->service_image  }}">--}}
{{--                    @endif</td>--}}
                <td>{{$item->service_name}}</td>
                <td>{{$item->service_description}}</td>
                <td>
                    <a class="btn btn-secondary btn-sm"
                       href='{{url('service/detail/'.$item->id)}}'>Detail</a>
                    <a class="btn btn-warning btn-sm"
                       href='{{url('service/edit/'.$item->id)}}'>Edit</a>
                    <form onsubmit="return confirm('yakin mau hapus?')"
                          class="d-inline"
                          action="{{'service/delete/'.$item->id}}"
                          method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection

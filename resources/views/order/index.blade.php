@extends("layout/aplikasi")

@section("content")
    <a href="/order/create" class="btn btn-primary">+ Tambah Data Order</a>
    <table class="table">
        <thead>
        <tr>
            <th>foto</th>
            <th>order no</th>
            <th>order name</th>
            <th>status</th>
            <th>aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>@if($item->foto)
                    <img style="max-width: 50px;max-height: 50px"
                         src="{{url('foto').'/'.$item->foto  }}">
                    @endif</td>
                <td>{{$item->order_no}}</td>
                <td>{{$item->order_nama}}</td>
                <td>{{$item->status_code}}</td>
                <td>
                    <a class="btn btn-secondary btn-sm"
                       href='{{url('/order/'.$item->order_no)}}'>Detail</a>
                    <a class="btn btn-warning btn-sm"
                       href='{{url('/order/'.$item->order_no.'/edit')}}'>Edit</a>
                    <form onsubmit="return confirm('yakin mau hapus?')"
                          class="d-inline"
                          action="{{'/order/'.$item->order_no}}"
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

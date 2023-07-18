@extends("layout/aplikasi")

@section("content")
    <table class="table">
        <thead>
        <tr>
            <th>order no</th>
            <th>service name</th>
            <th>username</th>
            <th>status</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->service_name}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->status_code}}</td>
                <td>
                    @if($item->status_code==2 ||$item->status_code==3 )
                        <a class="btn btn-secondary btn-sm"
                           href='{{url('/serve/close/'.$item->id)}}'>Close</a>
                    @elseif($item->status_code==1)
                        <a class="btn btn-secondary btn-sm"
                           href='{{url('/serve/cancle/'.$item->id)}}'>Cancle</a>
                        <a class="btn btn-secondary btn-sm"
                           href='{{url('/serve/approve/'.$item->id)}}'>Approve</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection

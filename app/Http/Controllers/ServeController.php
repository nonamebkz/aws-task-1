<?php

namespace App\Http\Controllers;

use App\Models\serve;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServeController extends Controller
{

    function index()
    {
        $userId = Auth::id();
        $data = DB::table('service')
            ->select('*', DB::raw('(SELECT serve.status_code FROM serve WHERE serve.user_id = ' . $userId . ' AND serve.service_id = service.id ORDER BY serve.updated_at DESC LIMIT 1) AS flag'))->paginate(2);

        return view('serve/index')->with('data', $data);
    }

    function serveOrder(Request $request)
    {
        $data = [
            'service_id' => $request->service_id,
            'user_id' => $request->user_id,
            'status_code' => $request->status_code,
        ];

        serve::create($data);
        return redirect('serve')->with('success', 'success add new data');
    }

    function listServe()
    {
        $data = DB::table('serve')
            ->select('serve.id', 'service.service_name', 'serve.status_code', 'users.name')
            ->leftJoin('service', 'serve.service_id', '=', 'service.id')
            ->leftJoin('users', 'users.id', '=', 'serve.user_id')
            ->paginate(5);

        return view('serve/listserve')->with('data', $data);
    }
    function close($id)
    {
        $data=[
            'status_code'=>4
        ];
        serve::where('id', $id)->update($data);
        return redirect('listorder');
    }
    function approve($id)
    {
        $data=[
            'status_code'=>2
        ];
        serve::where('id', $id)->update($data);
        return redirect('listorder');
    }
    function cancle($id)
    {
        $data=[
            'status_code'=>3
        ];
        serve::where('id', $id)->update($data);
        return redirect('listorder');
    }
}

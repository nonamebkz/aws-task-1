<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    function add()
    {
        return view('service/add');
    }

    function edit($id)
    {
        $data = service::where('id', $id)->first();
        return view('service/edit')->with('data', $data);
    }

    function create(Request $request)
    {
        //        validate data
        $request->validate([
            'service_name' => 'required',
            'service_price' => 'required',
        ]);

        //        prepare data
        $data = [
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_price' => $request->service_price,
        ];

        service::create($data);
        return redirect('service')->with('success', 'success add new data');
    }

    function getDetail($id)
    {
        $data = service::where('id', $id)->first();
//        Cache::driver('dynamodb')->put();
//Cache::put($id,$data,120);
        return view('service/show') -> with('data', $data);
    }

    function getData()
    {
        $data = service::paginate(5);
        return view('service/index')->with('data', $data);
    }

    function update(Request $request, string $id)
    {
        $request->validate([
            'service_name' => 'required',
            'service_price' => 'required',
        ]);


        $data = [
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_price' => $request->service_price,
        ];
        service::where('id', $id)->update($data);

        return redirect('service')->with('success', "success update data");

    }

    function delete($id)
    {
//        $data = service::where('id', $id)->first();
//        File::delete(public_path('images') . '/' . $data->service_image);
        service::where('id', $id)->delete();
        return redirect('service')->with('success', 'success delete data');
    }
}

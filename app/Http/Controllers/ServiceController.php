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


        $foto_file = $request->file('service_image');
        $foto_ext = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ext;
        $foto_file->move(public_path('service_image'), $foto_nama);

        //        prepare data
        $data = [
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_price' => $request->service_price,
            'service_image' => $foto_nama
        ];
//            get file name baru hapus

//        return $data;

        service::create($data);
        return redirect('service')->with('success', 'success add new data');
    }

    function getDetail($id)
    {
        $data = service::where('id', $id)->first();
Cache::put($id,$data,120);
        return view('service/show') -> with('data', $data);
    }

    function getData()
    {
        $data = service::paginate(5);
        return view('service/index')->with('data', $data);
    }

    function update(Request $request, string $id)
    {
        Storage::disk('s3')->put('path/to/file.ext', 'some-content');

        $request->validate([
            'service_name' => 'required',
            'service_price' => 'required',
        ]);


        if ($request->hasFile('service_image')) {
            $foto_file = $request->file('service_image');
            $foto_ext = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ext;
            $foto_file->move(public_path('service_image'), $foto_nama);

            //            get file name baru hapus
            $data_foto = service::where('id', $id)->first();
            File::delete(public_path('service_image') . '/' . $data_foto->service_image);

        }

        $data = [
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_price' => $request->service_price,
            'service_image' => $foto_nama
        ];
        service::where('id', $id)->update($data);

        return redirect('service')->with('success', "success update data");

    }

    function delete($id)
    {
        $data = service::where('id', $id)->first();
        File::delete(public_path('service_image') . '/' . $data->service_image);
        service::where('id', $id)->delete();
        return redirect('service')->with('success', 'success delete data');
    }
}

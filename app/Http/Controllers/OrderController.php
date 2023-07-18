<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = order::paginate(5);
        return view('order/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('order_no', $request->order_no);
        Session::flash('order_nama', $request->order_nama);
        Session::flash('status_code', $request->status_code);

        $request->validate([
            'order_no' => 'required|numeric',
            'order_nama' => 'required',
            'status_code' => 'required|numeric',
            'foto' => 'required',
        ], [
            'order_no.required' => 'order no harus di isi',
            'order_no.numeric' => 'order no harus di isi dengan angka',
            'order_nama.required' => 'order nama harus di isi',
            'status_code.required' => 'status code harus di isi',
            'foto.required' => 'foto wajib',
//            'foto.mimes' => 'foto hanya harus jpeg,jpg,png,gif'
        ]);

//        return ;
        $foto_file = $request->file('foto');
        $foto_ext = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ext;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'order_no' => $request->input('order_no'),
            'order_nama' => $request->input('order_nama'),
            'status_code' => $request->input('status_code'),
            'foto' => $foto_nama,
        ];
        order::create($data);
        return redirect('order')->with('success', 'okee');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = order::where('order_no', $id)->first();
        return view('order/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = order::where('order_no', $id)->first();
        return view('order/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'order_nama' => 'required',
            'status_code' => 'required|numeric',
        ], [
            'order_nama.required' => 'order nama harus di isi',
            'status_code.required' => 'status code harus di isi'
        ]);
        $data = [
            'order_nama' => $request->input('order_nama'),
            'status_code' => $request->input('status_code')
        ];

        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ext = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ext;
            $foto_file->move(public_path('foto'), $foto_nama);

//            get file name baru hapus
            $data_foto = order::where('order_no', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto);
            $data = [
                'foto' => $foto_nama
            ];
        }

        order::where('order_no', $id)->update($data);

        return redirect('/order')->with('success', "oke update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = order::where('order_no', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);
        order::where('order_no', $id)->delete();
        return redirect('/order')->with('success', 'oke delete');
    }
}

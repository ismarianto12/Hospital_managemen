<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Model\tmpasien;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('daftar.create'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('daftar', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $required = [
            'nama' => 'required',
            'email' => 'unique:tmpasien,email|required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'rtrw' => 'required',
            'kelurahan' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'keluhan' => 'required',
        ];
        $error = Validator::make($request->all(), $required);
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $insert = new tmpasien();
        $insert->nama  =  $request->nama;
        $insert->alamat =  $request->alamat;
        $insert->no_telp  =  $request->no_telp;
        $insert->email  =  $request->email;
        $insert->rtrw  =  $request->rtrw;
        $insert->kelurahan  =  $request->kelurahan;
        $insert->tgl_lahir  =  $request->tgl_lahir;
        $insert->jk  =  $request->jk;
        $insert->keluhan  =  $request->keluhan;
        $insert->save();
        $has = sha1(md5('rian' . $request->email . 'rian'));
        return response()->json(['success' => "Data berhasil di simpan", 'url' => Url('daftar/detail/' . $insert->id . '/' . $has.'/?refEmail='.$request->email)], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id, $has)
    {
        $data = tmpasien::findOrFail($id);
        return view('detail_daftar', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

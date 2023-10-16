<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        //get karyawan
        $karyawan = Karyawan::oldest()->paginate(5);

        return view('karyawan.index', [
            "title" => "Karyawan",
        ],  compact('karyawan'));
    }

    public function show($id)
    {
        //
    }

    // function menampikan form tambah
    public function create()
    {
        return view('karyawan.create');
    }

    // function menambahkan data
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nik'     => 'required|numeric|unique:App\Models\Karyawan,nik',
            'nama'   => 'required',
            'posisi'   => 'required',
            'jabatan'   => 'required',
            'jumlah_gaji'   => 'required|numeric',
        ]);

        //create karyawan
        Karyawan::create([
            'nik'     => $request->nik,
            'nama'     => $request->nama,
            'posisi'     => $request->posisi,
            'jabatan'     => $request->jabatan,
            'jumlah_gaji'     => $request->jumlah_gaji,
        ]);

        //redirect to index
        return redirect()->route('karyawan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // function menampilkan form edit
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    // function mengubah data
    public function update(Request $request, Karyawan $karyawan)
    {
        //validate form
        $this->validate($request, [
            'nik'     => 'required|numeric',
            'nama'   => 'required',
            'posisi'   => 'required',
            'jabatan'   => 'required',
            'jumlah_gaji'   => 'required|numeric',
        ]);

        //update karyawan
        $karyawan->update([
            'nik'     => $request->nik,
            'nama'     => $request->nama,
            'posisi'     => $request->posisi,
            'jabatan'     => $request->jabatan,
            'jumlah_gaji'     => $request->jumlah_gaji,
        ]);

        //redirect to index
        return redirect()->route('karyawan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // function menghapus data
    public function destroy(Karyawan $karyawan)
    {
        //delete karyawan
        $karyawan->delete();

        //redirect to index
        return redirect()->route('karyawan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

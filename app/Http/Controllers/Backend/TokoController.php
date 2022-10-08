<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TokoController extends Controller
{
    public function index()
    {
        $data = [
            'toko' => Toko::all()
        ];
        return view('admin.toko.index', $data);
    }

    public function create()
    {
        return view('admin.toko.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'kategori_produk' => 'required',
            'alamat' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image|max:2048',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
            'dokumen' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
        ], [
            'nama.required' => 'Name field is required.',
            'pemilik.required' => 'Pemilik field is required.',
            'kategori_produk.required' => 'Kategori produk field is required.',
            'alamat.required' => 'Alamat field is required.',
        ]);

        if ($request->hasFile('logo')) {
            $path_logo = $request->file('logo')->store('uploads/logo');
        } else {
            $path_logo = '';
        }

        if ($request->hasFile('foto')) {
            $path_foto = $request->file('foto')->store('uploads/foto');
        } else {
            $path_foto = '';
        }

        if ($request->hasFile('dokumen')) {
            $path_dokumen = $request->file('dokumen')->store('uploads/dokumen');
        } else {
            $path_dokumen = '';
        }

        // $toko = Toko::create($request->all());
        $toko = Toko::create([
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'kategori_produk' => $request->kategori_produk,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'logo' => $path_logo,
            'foto' => $path_foto,
            'dokumen' => $path_dokumen,
        ]);

        Alert::success('Berhasil', 'Data berhasil ditambahkan!');
        return redirect('/toko');
    }

    public function edit($id)
    {
        $toko = Toko::find($id);
        return view('admin.toko.edit', compact(['toko']));
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'kategori_produk' => 'required',
            'alamat' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image|max:2048',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
            'dokumen' => 'mimes:jpg,png,jpeg,pdf|max:2048',
        ], [
            'nama.required' => 'Name field is required.',
            'pemilik.required' => 'Pemilik field is required.',
            'kategori_produk.required' => 'Kategori produk field is required.',
            'alamat.required' => 'Alamat field is required.',
        ]);

        $toko = Toko::find($id);

        if ($request->hasFile('logo')) {
            Storage::delete($toko->logo);
            $path_logo = $request->file('logo')->store('uploads/logo');
        } else {
            $path_logo = $toko->logo;
        }

        if ($request->hasFile('foto')) {
            Storage::delete($toko->foto);
            $path_foto = $request->file('foto')->store('uploads/foto');
        } else {
            $path_foto = $toko->foto;
        }

        if ($request->hasFile('dokumen')) {
            Storage::delete($toko->dokumen);
            $path_dokumen = $request->file('dokumen')->store('uploads/dokumen');
        } else {
            $path_dokumen = $toko->dokumen;
        }

        // $toko->update($request->all());
        $toko->update([
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'kategori_produk' => $request->kategori_produk,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'logo' => $path_logo,
            'foto' => $path_foto,
            'dokumen' => $path_dokumen,
        ]);

        Alert::success('Berhasil', 'Data berhasil diupdate!');
        return redirect('/toko');
    }

    public function destroy($id)
    {
        $toko = Toko::find($id);
        if ($toko->logo) {
            Storage::delete($toko->logo);
        }

        if ($toko->foto) {
            Storage::delete($toko->foto);
        }

        if ($toko->dokumen) {
            Storage::delete($toko->dokumen);
        }

        $toko->delete();
        return response()->json(['status' => 'Data berhasil di hapus!']);
    }
}
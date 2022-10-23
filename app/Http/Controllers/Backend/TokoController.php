<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TokoController extends Controller
{
    use AuthenticatesUsers;
    use HasRoles;

    public function index()
    {
        if (Auth::user()->hasRole('Administrator') == true) {
            $data = [
                'toko' => Toko::all()
            ];
        } else {
            $id = Auth::user()->id;
            $data = [
                'toko' => DB::table('toko')->where('id_user', $id)->get()
            ];
        }

        return view('admin.toko.index', $data);
    }

    public function create()
    {
        return view('admin.toko.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image|max:2048',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
            'dokumen' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
        ], [
            'nama.required' => 'Name field is required.',
            'pemilik.required' => 'Pemilik field is required.',
            'alamat.required' => 'Alamat field is required.',
            'latitude.required' => 'Map field is required.',
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
        Toko::create([
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'logo' => $path_logo,
            'foto' => $path_foto,
            'dokumen' => $path_dokumen,
            'status' => 'pending',
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'id_user' => Auth::user()->id
        ]);

        Alert::success('Success', 'Data berhasil ditambahkan!');
        return redirect('/toko');
    }

    public function show($id)
    {
        $toko = Toko::find($id);
        return view('admin.toko.detail', compact(['toko']));
    }

    public function edit($id)
    {
        $toko = Toko::find($id);
        return view('admin.toko.edit', compact('toko'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image|max:2048',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
            'dokumen' => 'mimes:jpg,png,jpeg,pdf|max:2048',
        ], [
            'nama.required' => 'Name field is required.',
            'pemilik.required' => 'Pemilik field is required.',
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
        if (Auth::user()->hasRole('Administrator') == true) {
            $toko->update([
                'nama' => $request->nama,
                'pemilik' => $request->pemilik,
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'logo' => $path_logo,
                'foto' => $path_foto,
                'dokumen' => $path_dokumen,
                'status' => $request->status_toko
            ]);
        } else {
            $toko->update([
                'nama' => $request->nama,
                'pemilik' => $request->pemilik,
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'logo' => $path_logo,
                'foto' => $path_foto,
                'dokumen' => $path_dokumen,
            ]);
        }

        Alert::success('Success', 'Data berhasil diubah!');
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
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\User;
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
                'toko' => DB::table('toko')->where('user_id', $id)->get()
            ];
        }

        return view('admin.toko.index', $data);
    }

    public function create()
    {
        $data['users'] = User::all();
        return view('admin.toko.add', $data);
    }

    public function store(Request $request)
    {
        if (Auth::user()->hasRole('Administrator')) {
            $rules = 'required';
        } else {
            $rules = '';
        }

        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image|max:2048',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
            'dokumen' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
            'user_id' => $rules
        ], [
            'nama.required' => 'Name field is required.',
            'pemilik.required' => 'Pemilik field is required.',
            'alamat.required' => 'Alamat field is required.',
            'latitude.required' => 'Map field is required.',
            'user_id.required' => 'User field is required.',
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
        if (Auth::user()->hasRole('Administrator') == true) {
            Toko::create([
                'nama' => $request->nama,
                'pemilik' => $request->pemilik,
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'logo' => $path_logo,
                'foto' => $path_foto,
                'dokumen' => $path_dokumen,
                'status' => 'pending',
                'longtitude' => $request->longtitude,
                'latitude' => $request->latitude,
                'user_id' => $request->user_id
            ]);
        } else {
            Toko::create([
                'nama' => $request->nama,
                'pemilik' => $request->pemilik,
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'logo' => $path_logo,
                'foto' => $path_foto,
                'dokumen' => $path_dokumen,
                'status' => 'pending',
                'longtitude' => $request->longtitude,
                'latitude' => $request->latitude,
                'user_id' => Auth::user()->id
            ]);
        }

        Alert::success('Success', 'Data berhasil ditambahkan!');
        return redirect('/toko');
    }

    public function show($id)
    {
        $toko = Toko::find($id);
        $users = User::all();
        return view('admin.toko.detail', compact('toko', 'users'));
    }

    public function edit($id)
    {
        $toko = Toko::find($id);
        $users = User::all();
        return view('admin.toko.edit', compact('toko', 'users'));
    }

    public function update($id, Request $request)
    {
        if (Auth::user()->hasRole('Administrator')) {
            $rules = 'required';
        } else {
            $rules = '';
        }

        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image|max:2048',
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
            'dokumen' => 'mimes:jpg,png,jpeg,pdf|max:2048',
            'user_id' => $rules
        ], [
            'nama.required' => 'Name field is required.',
            'pemilik.required' => 'Pemilik field is required.',
            'alamat.required' => 'Alamat field is required.',
            'latitude.required' => 'Map field is required.',
            'user_id.required' => 'User field is required.',
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
                'user_id' => $request->user_id,
                'longtitude' => $request->longtitude,
                'latitude' => $request->latitude,
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
                'longtitude' => $request->longtitude,
                'latitude' => $request->latitude,
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

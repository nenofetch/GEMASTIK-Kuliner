<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Traits\HasRoles;

class UserController extends Controller
{

    use AuthenticatesUsers;
    use HasRoles;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => User::all()
        ];
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required',
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $users->assignRole($request->role);

        Alert::success('Berhasil', 'Data berhasil ditambahkan!');
        return redirect('pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact(['users']));
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
        $users = User::find($id);

        if ($users->email == $request->email) {
            $rules = 'required|email';
        } else {
            $rules = 'required|email|unique:users';
        }

        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => $rules,
                'password' => 'required|min:8',
                'role' => 'required',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => $rules,
                'role' => 'required',
            ]);
        }

        if ($request->password) {
            $users->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $users->assignRole($request->role);
        } else {
            $users->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            $users->assignRole($request->role);
        }

        Alert::success('Berhasil', 'Data berhasil diubah!');
        return redirect('pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $data = [
            'user' => Auth::user($id)
        ];

        return view('admin.user.profile', $data);
    }

    public function update_profile(Request $request)
    {
        $id = $request->id;
        $users = User::find($id);

        if ($users->email == $request->email) {
            $rules = 'required|email';
        } else {
            $rules = 'required|email|unique:users';
        }

        $request->validate([
            'name' => 'required',
            'email' => $rules,
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($users->foto != 'uploads/users/Avatar.png') {
                Storage::delete($users->foto);
                $path_foto = $request->file('foto')->store('uploads/users');
            }
            $path_foto = $request->file('foto')->store('uploads/users');
        } else {
            $path_foto = $users->foto;
        }

        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_telepon' =>  $request->no_telepon,
            'foto' => $path_foto,
        ]);

        Alert::success('Berhasil', 'Data berhasil diubah!');
        return redirect('/profile');
    }

    public function change_password()
    {
        return view('admin.user.changePassword');
    }

    public function update_password(Request $request)
    {
        // $request->validate([
        //     'old_password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'confirm_password' => ['required', 'required_with:password|', 'string', 'min:8', 'confirmed']
        // ]);

        // $old_password = Hash::make($request->old_password);
        // $new_password = Hash::make($request->new_password);

        // $id = Auth::user()->id;
        // $users = User::find($id);

        // if (!Hash::check($old_password, $users->password)) {
        //     echo "Cocok";
        // } else {
        //     echo "tidak";
        // }


        # Validation
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}

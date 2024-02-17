<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $request->validate([
            'nis' => 'required|unique:users,nis',
            'name' => 'required',
            'telepon' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'level' => 'required'
        ]);

        $user = new User();
        $user->nis = $request->nis;
        $user->name = $request->name;
        $user->telepon = $request->telepon;
        $user->kelas = $request->kelas;
        $user->jurusan = $request->jurusan;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();

        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil menambah user baru');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|unique:users,nis,' . $id,
            'name' => 'required',
            'telepon' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'sometimes|nullable|confirmed',
            'level' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->nis = $request->nis;
        $user->name = $request->name;
        $user->telepon = $request->telepon;
        $user->kelas = $request->kelas;
        $user->jurusan = $request->jurusan;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->level = $request->level;
        $user->save();

        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil mengubah user');
    }
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);

        if ($id == $request->user()->id)
            return redirect()->route('users.index')
                ->with('error_message', 'Anda tidak dapat menghapus diri
sendiri.');
        if ($user)
            $user->delete();
        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
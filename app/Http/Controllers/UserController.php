<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        foreach ($users as $user) {
            if ($user['level_user'] == '1') {
                $user['level_user'] = 'Admin';
            } else {
                $user['level_user'] = 'Guru';
            }
        }

        return view('main.admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tervalidasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level_user' => 'required',
        ]);

        $tervalidasi['password'] = bcrypt($tervalidasi['password']);

        User::create($tervalidasi);

        return to_route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();

        $user['level_user'] = $user['level_user'] == '1' ? 'Admin' : 'Guru';


        return view('main.admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = User::where('id', $id)->first();

        return view('main.admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();

        if (!$user) {
            return abort(404);
        }

        if (request('password')) {
            $tervalidasi = $request->validate([
                'username' => 'required',
                'password' => 'confirmed',
                'level_user' => 'required',
            ]);
        } else {
            $tervalidasi = $request->validate([
                'username' => 'required',
                'level_user' => 'required',
            ]);
        }

        $user->update($tervalidasi);

        return to_route('user.index')->with('success', 'Data User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->first();

        if (!$user) {
            return abort(404);
        }

        $user->delete();

        return to_route('user.index')->with('success', 'Data User Berhasil Dihapus!');
    }
}

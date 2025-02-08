<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        $data = Auth::attempt($validatedData);

        if ($data) {

            if (Auth::user()->level_user == 1) {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard.index');
            } else {
                $request->session()->regenerate();
                return redirect()->route('guru.dashboard.index');
            }
        }

        return redirect()->back()->with('failed', 'Login Gagal!');
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

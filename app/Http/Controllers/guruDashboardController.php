<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class guruDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jml_kelasXII = Siswa::where('tingkatan', 3)->count();
        $jml_kelasXI = Siswa::where('tingkatan', 2)->count();
        $jml_kelasX = Siswa::where('tingkatan', 1)->count();


        return view('main.guru.dashboard.index', [
            'jml_kelasXII' => $jml_kelasXII,
            'jml_kelasXI' => $jml_kelasXI,
            'jml_kelasX' => $jml_kelasX
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

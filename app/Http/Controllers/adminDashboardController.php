<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jml_perempuan = Siswa::where('jk', 'P')->count();
        $jml_lakiLaki = Siswa::where('jk', 'L')->count();
        $jml_siswa = Siswa::count();
        $jml_siswa_tidak_aktif = Siswa::where('aktif', 0)->count();


        $tingkatan_jurusan = [
            '3' => ['RPL1', 'RPL2', 'MMK', 'TKJ'],
            '2' => ['TJKT2', 'TJKT1', 'PPLG', 'DKV'],
            '1' => ['PPLG', 'DKV', 'TJKT']
        ];

        $counts = [];

        foreach ($tingkatan_jurusan as $tingkatan => $jurusans) {
            foreach ($jurusans as $jurusan) {
                $key = "jml_{$tingkatan}{$jurusan}";
                $counts[$key] = Siswa::where('tingkatan', $tingkatan)->where('jurusan', $jurusan)->count();
            }
        }

        return view('main.admin.dashboard.index', [
            'counts' => $counts,
            'jml_perempuan' => $jml_perempuan,
            'jml_lakiLaki' => $jml_lakiLaki,
            'jml_siswa' => $jml_siswa,
            'jml_siswa_tidak_aktif' => $jml_siswa_tidak_aktif
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

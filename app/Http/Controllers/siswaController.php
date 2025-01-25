<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view('main.admin.siswa.index', [
            'siswas' => $siswas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tervalidasi = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tingkatan' => 'required',
            'jurusan' => 'required',
        ]);

        Siswa::create($tervalidasi);

        return to_route('siswa.index')->with('success', 'Siswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::where('id', $id)->first();

        if (!$siswa) {
            return abort(404);
        }

        if ($siswa->jk == 'L') {
            $siswa->jk = 'Laki-laki';
        } else {
            $siswa->jk = 'Perempuan';
        }

        return view('main.admin.siswa.show', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::where('id', $id)->first();

        if (!$siswa) {
            return abort(404);
        }

        return view('main.admin.siswa.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::where('id', $id)->first();

        $tervalidasi = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tingkatan' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa->update($tervalidasi);

        return to_route('siswa.index')->with('success', 'Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::where('id', $id)->first();
        $siswa->delete();

        return to_route('siswa.index')->with('success', 'Data Siswa Berhasil Dihapus!');
    }
}

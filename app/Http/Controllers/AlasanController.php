<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use Illuminate\Http\Request;

class alasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alasans = Alasan::all();

        return view('main.admin.alasan.index', [
            'alasans' => $alasans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.admin.alasan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tervalidasi = $request->validate([
            'nama_alasan' => 'required'
        ]);

        Alasan::create($tervalidasi);

        return to_route('alasan.index')->with('success', 'Data Alasan Berhasil Ditambahkan!');
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
        $alasan = Alasan::find($id);

        return view('main.admin.alasan.edit', [
            'alasan' => $alasan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tervalidasi = $request->validate([
            'nama_alasan' => 'required'
        ]);

        $alasan = Alasan::where('id', $id)->first();

        $alasan->update($tervalidasi);

        return to_route('alasan.index')->with('success', 'Data Alasan Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alasan = Alasan::find($id);

        $alasan->delete();

        return to_route('alasan.index')->with('success', 'Data Alasan Berhasil Dihapus!');
    }
}

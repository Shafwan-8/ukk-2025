<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tbl_siswa';

    protected $fillable = [
        'nis',
        'nama_siswa',
        'jk',
        'tingkatan',
        'jurusan',
    ];
}

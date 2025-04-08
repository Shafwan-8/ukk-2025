@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Siswa" title="Ubah Data Siswa" hideCreate />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
            </div>
            <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                <div class="card-body">
                    @method('PUT')
                    @csrf
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="text" class="form-control" name="nis" placeholder="NIS"
                                    value="{{ $siswa->nis }}" data-mask="000-000" placeholder="000-000"
                                    autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Siswa"
                                    value="{{ $siswa->nama }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-select">
                                    <option value="L" {{ $siswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $siswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Tingkatan</label>
                                <select name="tingkatan" id="tingkatan" class="form-select">
                                    <option value="1" {{ $siswa->tingkatan == '1' ? 'selected' : '' }}>X</option>
                                    <option value="2" {{ $siswa->tingkatan == '2' ? 'selected' : '' }}>XI</option>
                                    <option value="3" {{ $siswa->tingkatan == '3' ? 'selected' : '' }}>XII</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <select name="jurusan" class="form-select" id="">
                                    <option value="RPL1" {{ $siswa->jurusan == 'RPL1' ? 'selected' : '' }}>RPL 1
                                    </option>
                                    <option value="RPL2" {{ $siswa->jurusan == 'RPL2' ? 'selected' : '' }}>RPL 2
                                    </option>
                                    <option value="TKJ" {{ $siswa->jurusan == 'TKJ' ? 'selected' : '' }}>TKJ
                                    </option>
                                    <option value="MMK" {{ $siswa->jurusan == 'MMK' ? 'selected' : '' }}>Multimedia
                                    </option>
                                    <option value="PPLG" {{ $siswa->jurusan == 'PPLG' ? 'selected' : '' }}>PPLG
                                    </option>
                                    <option value="DKV" {{ $siswa->jurusan == 'DKV' ? 'selected' : '' }}>DKV
                                    </option>
                                    <option value="TJKT1" {{ $siswa->jurusan == 'TJKT1' ? 'selected' : '' }}>TJKT 1
                                    </option>
                                    <option value="TJKT2" {{ $siswa->jurusan == 'TJKT2' ? 'selected' : '' }}>TJKT 2
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.footerLayout')

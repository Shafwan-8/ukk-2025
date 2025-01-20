@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Siswa" title="Ubah Data Siswa" hideCreate />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="text" class="form-control" name="nis" placeholder="NIS"
                                    value="{{ $siswa->nis }}"  data-mask="000-000" placeholder="000-000" autocomplete="off">
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
                                    <option value="rpl-1" {{ $siswa->jurusan == 'rpl-1' ? 'selected' : '' }}>RPL 1</option>
                                    <option value="rpl-2" {{ $siswa->jurusan == 'rpl-2' ? 'selected' : '' }}>RPL 2</option>
                                    <option value="tkj" {{ $siswa->jurusan == 'tkj' ? 'selected' : '' }}>TKJ</option>
                                    <option value="mmk" {{ $siswa->jurusan == 'mmk' ? 'selected' : '' }}>Multimedia</option>
                                    <option value="pplg" {{ $siswa->jurusan == 'pplg' ? 'selected' : '' }}>PPLG</option>
                                    <option value="dkv" {{ $siswa->jurusan == 'dkv' ? 'selected' : '' }}>DKV</option>
                                    <option value="tjkt" {{ $siswa->jurusan == 'tjkt' ? 'selected' : '' }}>TJKT</option>
                                </select>
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
</div>
@include('layouts.footerLayout')

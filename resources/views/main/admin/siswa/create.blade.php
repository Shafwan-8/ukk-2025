@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Siswa" title="Tambah Data Siswa" hideCreate />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
            </div>
            <form action="{{ route('siswa.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="text" name="nis"
                                    class="form-control @error('nis') is-invalid @enderror" data-mask="000-000"
                                    placeholder="000-000" autocomplete="off" />
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" placeholder="Nama Siswa">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jk" id="jk"
                                    class="form-select @error('jk') is-invalid @enderror">
                                    <option value="" selected hidden>-- pilih jenis kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Tingkatan</label>
                                <select name="tingkatan" id="tingkatan"
                                    class="form-select @error('tingkatan') is-invalid @enderror">
                                    <option value="" selected hidden>-- pilih tingkatan --</option>
                                    <option value="1">X</option>
                                    <option value="2">XI</option>
                                    <option value="3">XII</option>
                                </select>
                                @error('tingkatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <select name="jurusan" class="form-select @error('jurusan') is-invalid @enderror">
                                    <option value="" selected hidden>-- pilih jurusan --</option>
                                    <option value="RPL1">RPL 1</option>
                                    <option value="RPL2">RPL 2</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="MMK">Multimedia</option>
                                    <option value="PPLG">PPLG</option>
                                    <option value="DKV">DKV</option>
                                    <option value="TJKT">TJKT</option>
                                </select>
                                @error('jurusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.footerLayout')

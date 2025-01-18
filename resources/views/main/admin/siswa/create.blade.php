@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Siswa" title="Tambah Data Siswa" titleButton="Tambah Data Siswa" hideCreate />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="post">
                    @csrf
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="text" class="form-control" name="nis" placeholder="NIS">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-select">
                                    <option value="" selected disabled hidden>-- pilih jenis kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Tingkatan</label>
                                <select name="tingkatan" id="tingkatan" class="form-select">
                                    <option value="" selected disabled hidden>-- pilih tingkatan --</option>
                                    <option value="1">X</option>
                                    <option value="2">XI</option>
                                    <option value="3">XII</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <select name="jurusan" class="form-select" id="">
                                    <option value="" selected disabled hidden>-- pilih jurusan --</option>
                                    <option value="rpl-1">RPL 1</option>
                                    <option value="rpl-2">RPL 2</option>
                                    <option value="tkj">TKJ</option>
                                    <option value="mmk">Multimedia</option>
                                    <option value="pplg">PPLG</option>
                                    <option value="dkv">DKV</option>
                                    <option value="tjkt">TJKT</option>
                                </select>
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
</div>

@include('layouts.footerLayout')

@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Siswa" title="Detail Data Siswa" hideCreate/>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <table class="table table-vcenter">
                            <tr>
                                <th class="">NIS</th>
                                <td class="">:</td>
                                <td>{{ $siswa->nis }}</td>
                            </tr>
                            <tr>
                                <th>Nama Siswa</th>
                                <td>:</td>
                                <td>{{ $siswa->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{ $siswa->jk }}</td>
                            </tr>
                            <tr>
                                <th>Tingkatan</th>
                                <td>:</td>
                                <td>{{ $siswa->tingkatan }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>:</td>
                                <td>{{ $siswa->jurusan }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $siswa->aktif }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <div class="d-block p-3 h-100">
                            <div class="p-3 bg-primary mx-auto w-50 h-75 mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footerLayout')

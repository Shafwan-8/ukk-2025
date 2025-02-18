@include('layouts.headerLayoutGuru')

<x-pageHeader :status="false" title="Input Keterlambatan" pretitle="Input Keterlambatan Siswa" />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header fw-bold">
                Masukkan Data Siswa
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    @csrf
                    @method('POST')
                    <div class="row row-cols-1">
                        <div class="col col-12 col-lg-6">
                            <div class="mb-3" >
                                <label for="nis" class="form-label">NIS</label>
                                <select name="nis" id="tom-select" class="form-select" placeholder="Select NIS">
                                    <option value="">Ketik NIS Siswa</option>
                                    @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->nis }}">{{ $siswa->nis }} - {{ $siswa->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alasan" class="form-label">Alasan</label>
                                <input type="text" class="form-control" id="alasan" name="alasan" required>
                            </div>
                            <div class="mb-3">
                                <label for="alasan" class="form-label">Alasan</label>
                                <input type="text" class="form-control" id="alasan" name="alasan" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footerLayoutGuru')

{{-- Selesai tom select nis siswa bagian input terlambat --}}

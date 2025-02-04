@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Data Alasan" title="Tambah Data Alasan" hideCreate/>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah data alasan</h3>
            </div>
            <form action="{{ route('alasan.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nama_alasan" class="form-label">Nama alasan</label>
                                <input type="text" name="nama_alasan" id="nama_alasan" class="form-control @error('nama_alasan') is-invalid @enderror" autocomplete="false" autofocus>
                                @error('nama_alasan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.footerLayout')

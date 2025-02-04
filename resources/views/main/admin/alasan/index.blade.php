@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="Data Alasan" title="Daftar Data Alasan" route="{{ route('alasan.create') }}"
    titleButton="Tambah Data" hideBack />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Data Alasan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-nowrap table-hover">
                        <thead>
                            <th>#</th>
                            <th>Nama Alasan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($alasans as $alasan)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $alasan->nama_alasan }}</td>
                                    <td>
                                        <a href="{{ route('alasan.edit', $alasan->id) }}') }}" class="avatar bg-yellow text-white avatar-sm me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                <path
                                                    d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                <path d="M16 5l3 3" />
                                            </svg>
                                        </a>

                                        <button class="avatar bg-danger text-white avatar-sm border-0" type="button"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal{{ $alasan->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 7l16 0" />
                                                <path d="M10 11l0 6" />
                                                <path d="M14 11l0 6" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </button>

                                        <div class="modal" id="exampleModal{{ $alasan->id }}" tabindex="-1">>
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="modal-status bg-danger"></div>
                                                    <div class="modal-body text-center py-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon mb-2 text-danger icon-lg" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 9v2m0 4v.01" />
                                                            <path
                                                                d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                                                        </svg>
                                                        <h3>Anda Yakin?</h3>
                                                        <div class="text-secondary">Yakin untuk menghapus data
                                                            Siswa ini?</div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="w-100">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <button type="button" class="btn w-100"
                                                                        data-bs-dismiss="modal">
                                                                        Batal
                                                                    </button>
                                                                </div>
                                                                <div class="col">
                                                                    <form action="#" id="hapus-alasan-{{ $alasan->id }}"
                                                                        method="post">
                                                                        <button type="submit"
                                                                            class="btn btn-danger w-100"
                                                                            data-bs-dismiss="modal">
                                                                            Hapus Data
                                                                        </button>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footerLayout')

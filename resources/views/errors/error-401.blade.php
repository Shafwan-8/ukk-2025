<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTable/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTable/dataTables.bootstrap5.min.css') }}">
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">401</div>
                <p class="empty-title">Oops… Anda Tidak memiliki Akses</p>
                <p class="empty-subtitle text-secondary">
                    Maaf, Anda tidak memiliki akses untuk halaman tersebut.
                </p>
                <div class="empty-action">
                    <a href="{{ route('guru.dashboard.index') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M5 12l6 6" />
                            <path d="M5 12l6 -6" />
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/tabler.min.js') }}"></script>
</body>


</html>

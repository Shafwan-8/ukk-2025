<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    {{ $pretitle }}
                </div>
                <h2 class="page-title">
                    {{ $title }}
                </h2>
            </div>
            @if ($status == true)
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-inline @isset($hideBack) d-none @endisset">
                            <a href="{{ url()->previous() }}" class="btn">Kembali</a>
                        </span>

                        @isset ($route)
                            <a href="{{ $route }}"
                                class="btn btn-primary @isset($hideCreate) d-none @endisset">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                @isset($titleButton)
                                    {{ $titleButton }}
                                @endisset
                            </a>
                        @endisset
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

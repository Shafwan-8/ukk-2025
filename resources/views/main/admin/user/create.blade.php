@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="User" title="Tambah Data User" hideCreate />

<div class="page-body">
    <div class="container-xl">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post" autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username"
                            class="form-control @error('username') is-invalid @enderror" placeholder="username"
                            autocomplete="off">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="password"
                            autocomplete="off">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Level
                            User</label>
                        <select name="level_user" id="level_user"
                            class="form-select @error('level_user') is-invalid @enderror">
                            <option value="" selected hidden>-- pilih level user --</option>
                            <option value="1">Admin</option>
                            <option value="2">Guru</option>
                        </select>
                        @error('level_user')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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

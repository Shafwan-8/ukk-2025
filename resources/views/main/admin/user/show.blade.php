@include('layouts.headerLayout')

<x-pageHeader :status="true" pretitle="User" title="Detail Data User" hideCreate />

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Data User</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-md-12">
                        <div class="mb-3">
                            <span class="form-label">Username</span>
                            <span>{{ $user->username }}</span>
                        </div>
                        <div class="mb-3">
                            <span class="form-label">Password</span>
                            <span>{{ $user->password }}</span>
                        </div>
                        <div class="mb-3">
                            <span class="form-label">Level User</span>
                            <span>{{ $user->level_user }}</span>
                        </div>
                        <div class="mb-3">
                            <span class="form-label">Status</span>
                            <span>{{ $user->status_user }}</span>
                        </div>
                    </div1>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footerLayout')

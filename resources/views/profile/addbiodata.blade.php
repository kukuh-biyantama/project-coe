@extends('layouts.app', ['title' => __('Add ClusterProfile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                {{-- <div class="card card-profile shadow">
               {{-- content --}}
                {{-- </div> --}} 
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">Tambah Biodata Anda</h3>
                        </div>
                    </div>
                    <div class="container-xl-4 row-lg-4 pt-2">
                        <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                            <a href="/clusterpetani/">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase text-muted mb-0">Petani</h2>
                                        </div>
                                        <div class="col">
                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                <i class="fas fa-snowflake"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

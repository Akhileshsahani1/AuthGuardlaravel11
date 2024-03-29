@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        {{-- <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class="dripicons-jewel float-end"></i>
                    <h4 class="mt-0">Companies</h4>
                    <h3 class="my-2" id="active-users-count">{{ $companies }}</h3>
                    <p class="mb-0 text-muted text-center">
                        <a href="{{ route('admin.companies.index') }}">View All</a>
                    </p>
                </div> <!-- end card-body-->
            </div>
        </div> --}}

    </div>

</div> <!-- container -->
@endsection

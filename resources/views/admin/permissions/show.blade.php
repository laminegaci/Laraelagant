@extends('admin.master')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">{{ $permission->name }} Permission</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">permissions</a></li>
                <li class="breadcrumb-item active">{{$permission->name}}</li>
            </ol>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="permission card-body">
                <center class="m-t-30"> 
                    {{-- <img src="{{ asset('_admin/images/') }}" class="img-circle" alt="image" width="150" /> --}}
                    <h4 class="card-title m-t-10">{{ $permission->name }}</h4>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Tab panes -->
            <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="{{ route('permissions.update', $permission->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="example-name" class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="{{$permission->name}}" value="{{ $permission->name }}" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update permission</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <!-- Tab panes -->
            <div class="card-body">
                <ul>
                    <h3>Roles have the Permission of {{ $permission->name }}</h3>
                @foreach ($permission_roles as $permission)
                    
                        <li>{{$permission->name}}</li>
                    
                @endforeach
            </ul>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection
@extends('admin.layout')

@section('content')

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="ti-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Admin</span>
                <span class="info-box-number">
                    {{$total_admin}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="ti-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Students</span>
                <span class="info-box-number">
                    {{$total_students}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="ti-drupal"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Drug Category</span>
                <span class="info-box-number">
                    {{$total_drug_type}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="ti-drupal"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Drug Type</span>
                <span class="info-box-number">
                    {{$total_drug_category}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="ti-drupal"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Drug Products</span>
                <span class="info-box-number">

                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

@endsection
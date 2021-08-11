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

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Recent Students') }}</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Matric Number</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Matric Number</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\User::orderBy('id','desc')->where('role_id',1)->limit(10)->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$value->matric_number}}</td>
                                <td>{{ucwords($value->full_name)}}</td>
                                <td>{{$value->email_address}}</td>
                                <td>{{$value->phone_number}}</td>
                                <td>{{ucwords($value->department->name)}}</td>
                                <td>{{strtoupper($value->levels->name)}}</td>
                                <td><a href="{{url('admin/view/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

@endsection
@extends('admin.layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue-gradient">
                <h3 class="widget-user-username">{{ ucwords($user->full_name) }}</h3>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" style="height: 80px; width: 80px" src="<?= image_url('author.jpeg') ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{$user->phone_number}}</h5>
                            <span class="description-text" style="text-transform: capitalize"> Phone Number</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header"> {{ strtoupper($user->levels->name) }}</h5>
                            <span class="description-text" style="text-transform: capitalize">Level</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">{{ ucwords($user->department->name )}}</h5>
                            <span class="description-text" style="text-transform: capitalize">Department</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

@endsection
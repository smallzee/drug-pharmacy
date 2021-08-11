@extends('admin.layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$page_title}}</h3>
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
                            <th>Department</th>
                            <th>Level</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Drug Usage</th>
                            <th>Drug Category</th>
                            <th>Drug Type</th>
                            <th>Measurement</th>
                            <th>Obtained Date</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Matric Number</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Drug Usage</th>
                            <th>Drug Category</th>
                            <th>Drug Type</th>
                            <th>Measurement</th>
                            <th>Obtained Date</th>
                        </tr>
                        </tfoot>
                        @php($sn =1)
                        @foreach(\App\Sales::orderBy('id','desc')->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{strtoupper($value->user->matric_number)}}</td>
                                <td>{{ ucwords($value->user->full_name) }}</td>
                                <td>{{ ucwords(department($value->user->dept,'name')) }}</td>
                                <td>{{ strtoupper(level($value->user->dept,'name')) }}</td>
                                <td>{{ ucwords(product($value->inventory->product_id,'name')) }}</td>
                                <td>{{$value->quantity}}</td>
                                <td>{{ $value->drug_usage }}</td>
                                <td>{{ ucwords(category(product($value->inventory->product_id,'category_id'),'name')) }}</td>
                                <td>{{ ucwords(drug_type(product($value->inventory->product_id,'drug_type_id'),'name')) }}</td>
                                <td>{{ ucwords(product($value->inventory->product_id,'measurement')) }}</td>
                                <td>{{$value->created_at}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection
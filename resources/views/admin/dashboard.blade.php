@extends('admin.layouts.index')
@section('content')
<div class="container">
    <!-- Breadcrumbs line -->
    <div class="crumbs">
        <ul id="breadcrumbs" class="breadcrumb">
            <li class="current">
                <i class="icon-home"></i>
                <a href="index.html">Dashboard</a>
            </li>
        </ul>
    </div>
    <!-- /Breadcrumbs line -->

    <!--=== Page Header ===-->
    <div class="page-header">
        <div class="page-title">
            <h3 style="margin-left: 210px">Dashboard</h3>
        </div>
    </div>
    <!-- /Page Header -->

    <!--=== Page Content ===-->
    <!--=== Box Tabs ===-->
    <div class="row">
        <div class="col-md-12" style="margin-left: 200px">
            <div class="col-sm-6 col-md-3 hidden-xs">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content">
                        <div class="visual red">
                            <i class="icon-truck"></i>
                        </div>
                        <div class="title">Total Cars</div>
                        <div class="value">{{ $cars }}</div>
                        <a class="more" href="{{ route('car.index') }}">View More <i class="pull-right icon-angle-right"></i></a>
                    </div>
                </div> <!-- /.smallstat -->
            </div>
            <div class="col-sm-6 col-md-3 hidden-xs">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content">
                        <div class="visual blue">
                            <i class="icon-user"></i>
                        </div>
                        <div class="title">Total Customers</div>
                        <div class="value">{{ $cust }}</div>
                        <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
                    </div>
                </div> <!-- /.smallstat -->
            </div>
            <div class="col-sm-6 col-md-3 hidden-xs">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content">
                        <div class="visual yellow">
                            <i class="icon-dollar"></i>
                        </div>
                        <div class="title">Total Reservation</div>
                        <div class="value">{{ $reserv }}</div>
                        <a class="more" href="{{ route('reservation.index') }}">View More <i class="pull-right icon-angle-right"></i></a>
                    </div>
                </div> <!-- /.smallstat -->
            </div>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
    <!-- /Box Tabs -->
    <!-- /Page Content -->
</div>
@endsection

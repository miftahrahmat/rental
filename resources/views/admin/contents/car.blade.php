@extends('admin.layouts.index')
@section('content')

</script>
<div class="container">
    <!-- Breadcrumbs line -->
    <div class="crumbs">
        <ul id="breadcrumbs" class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Dashboard</a>
            </li>
            <li class="current">
                <a href="#" title="">Data Mobil</a>
            </li>
        </ul>
    </div>
    <!-- /Breadcrumbs line -->

    <!--=== Page Header ===-->
    <div class="page-header">
        <div class="page-title">
            <h3>Car Inventory</h3>
        </div>
    </div>
    <!-- /Page Header -->

    <!--=== Page Content ===-->
    <!--=== Box Tabs ===-->
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable tabbable-custom tabbable-full-width">
                <ul class="nav nav-tabs" id="loc-tab">
                    <li><a href="#cars" data-toggle="tab" >Cars</a></li>
                    <li><a href="#car-new" data-toggle="tab">Add New Car</a></li>
                    <li><a href="#avail" data-toggle="tab">Availability</a></li>

                </ul>
                <div class="tab-content" id="loc-content">
                    <div class="tab-pane active" id="cars">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Tahun</th>
                                    <th>Nopol</th>
                                    <th>Warna</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            @foreach ($mobils as $mob)
                            <tbody>
                                <tr>
                                    <td>{{ $mob->id }}</td>
                                    <td>
                                        <img class="img-circle"
                                         src="{{ asset('assets/img/type/'.$mob->image) }}"
                                         alt="" style="width: 100px; height: 100px;">
                                    </td>
                                    <td>{{ $mob->Merk->merk }}</td>
                                    <td>{{ $mob->Type->type }}</td>
                                    <td>{{ $mob->Merk->tahun }}</td>
                                    <td>{{ $mob->nopol }}</td>
                                    <td>{{ $mob->warna }}</td>
                                    <td>{{ $mob->loc->city }}</td>
                                    <td>@if($mob->status == 'Tersedia')
                                            <label class="alert alert-info">{{ $mob->status }}</label>
                                        @elseif($mob->status == 'diService')
                                            <label class="alert alert-warning">{{ $mob->status }}</label>
                                        @else
                                            <label class="alert alert-danger">{{ $mob->status }}</label>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="tab-pane" id="car-new">
                        <div class="alert alert-info">
                            <strong>Cars / Vehicles Inventory</strong><br/>
                            Fill in the form below to add a new car. Please note that your clients are able to book a car type not a specific car/vehicle, so each car you add must be assigned to at least one car type. To add your cars/vehicles you need to have car types and locations added first.</div>
                        <button type="submit" class="btn btn-primary" id="save-car">Save Change</button>
                        <br/>
                        <br/>

                    </div>
                    <div class="tab-pane" id="avail">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <h4><i class="icon-calendar"></i> Calendar</h4>
                                </div>
                                <div class="widget-content">
                                    <div id="calendar"></div>
                                </div>
                            </div> <!-- /.widget box -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
    <!-- /Box Tabs -->
    <!-- /Page Content -->
</div>
@endsection

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>Front Page</title>

        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/font-awesome.min.css') }}">
        <!-- Bootstrap -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bootstrap/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/front.css') }}" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="{{ asset('assets/js/libs/jquery-1.10.2.min.js') }}"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap-datetimepicker.js') }}"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
        <script type="text/javascript">

        </script>
    </head>
    <body>
         <!-- Header -->
        <header class="header navbar navbar-fixed-top" role="banner">
            @include('front.layouts.header')
        </header> <!-- /.header -->
        <section style="background:#efefe9; padding-top: 250px; padding-bottom: 550px; padding-left: 400px; padding-right: 400px">
            <div class="container">
                <div class="row">
                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>
                                <li class="active">
                                    <a href="#home" data-toggle="tab" title="When & Where">
                                        <span class="round-tabs one">
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                        </span>
                                    </a></li>

                                <li><a href="#choosecar" data-toggle="tab" title="Choose Car">
                                        <span class="round-tabs two">
                                            <i class="fa fa-car"></i>
                                        </span>
                                    </a>
                                </li>
                                <li><a href="#extra" data-toggle="tab" title="Choose Extra">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-gift"></i>
                                        </span> </a>
                                </li>

                                <li><a href="#customer" data-toggle="tab" title="Checkout">
                                        <span class="round-tabs four">
                                            <i class="fa fa-usd"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#complete" data-toggle="tab" title="Completed">
                                        <span class="round-tabs five">
                                            <i class="glyphicon glyphicon-ok"></i>
                                        </span> </a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div class="col-md-12">
                                    <form method="POST" action="{{ route('loc') }}">
                                        <div class="row">
                                            <div class='col-md-6'>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Pick-up Date/Time</label>
                                                    <div class='input-group'>
                                                        <input type='date' class="form-control" name="start" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Return Date/Time</label>
                                                    <div class='input-group'>
                                                        <input type='date' class="form-control" name="end"/>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class='col-md-6'>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Pick-up location</label>
                                                    {!! Form::select('location_id', [''=>'Pilih Lokasi']+App\Location::pluck('city','id')->all(), null,  ['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Return location</label>
                                                    {!! Form::select('location_id', [''=>'']+App\Location::pluck('city','id')->all(), null,  ['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class='col-md-6'>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </br>
                            </div>
                            <div class="tab-pane fade" id="choosecar">
                                @include('front.content.car')
                            </div>
                            <div class="tab-pane fade" id="extra">
                            </div>
                            <div class="tab-pane fade" id="customer">
                                @include('front.content.customer')
                            </div>
                            <div class="tab-pane fade" id="complete">
                                @include('front.content.complete')
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>

</html>

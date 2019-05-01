<form id="customer_form" class="form-horizontal">
    <div class="row">
        <div id='select-car' class="col-md-12">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Booking Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-md-9 col-lg-9">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h4>Time & Place</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pick Up Location:</td>
                                            <td>
                                                <p>a</p>
                                                <p>b</p>
                                                <input type="hidden" name="pickup" value="" />
                                                <input type="hidden" name="locpickupid" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Return Location</td>
                                            <td>
                                                <p>a</p>
                                                <input type="hidden" name="locreturnid" value="{" />
                                                <p>b</p>
                                                <input type="hidden" name="return" value="" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rental Duration</td>
                                            <td>2 Hari</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-user-information">
                                    @foreach ( $mobils as $car)
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h4>Car Type</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-circle" src="{{ asset('assets/img/type/'.$car->image) }}" alt="{{ $car->Merk->merk.' '.$car->Type->type }}" style="width: 50px; height: 50px;"></td>
                                            <td>
                                                <p>{{ $car->Type->type }}
                                                </p>
                                                <p>(Example of this range: {{ $car->Merk->merk.' '.$car->Type->type }})</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <b>Rental Duration</b>
                                    </td>
                                    <td>

                                    </td>
                            <input type="hidden" value="" name="diff">
                            <input type="hidden" value="" name="total_day">
                            <input type="hidden" value="" name="total_hours">
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Price Per Day</b></p>
                                    <p><small></small></p>
                                </td>
                                <td>$</td>
                            <input type="hidden" value="" name="price_perday">
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Price Per Hour</b></p>
                                    <p><small></small></p>
                                </td>
                                <td>$ </td>
                            <input type="hidden" value="" name="price_perhour">
                            </tr>
                            <tr>
                                <td><b>Car Rental Fee</b></td>
                                <td>$ </td>
                            <input type="hidden" value="" name="rental_fee">
                            </tr>
                            <tr>
                                <td><b>Extra Price</b></td>
                                <td>$ </td>
                            <input type="hidden" value="" name="extra_fee">
                            </tr>
                            <tr class="danger">
                                <td><b>Total Price</b></td>
                                <td><strong>$ </strong></td>
                            <input type="hidden" value="" name="total_price">
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Required Deposit</b></p>
                                    <p><small> % of </small></p>
                                </td>
                                <td>$ </td>
                            <input type="hidden" value="" name="deposit_price">
                            </tr>
                            </tbody>
                        </table>
                        <span class="pull-right">
                            {{-- <input type="hidden" name="type_id" value="{{$car->Type->id}}">
                            <input type="hidden" name="car_id" value="{{$car->id}}"> --}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="customer_detail" class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Customer Details</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-user-information">
                            <tr>
                                <td colspan="2">
                                    <h4>Personal Details</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-5">
                                                <div class="form-group">
                                                    <label class="control-label">Title <span class="required">*</span></label>
                                                    {{ Form::select('title',array('' => '-- Choose --','Dr'=>'Dr','Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms','Other'=>'Other','Prof' =>'Prof','Rev' => 'Rev'),'',array('class' => 'form-control required')) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email <span class="required">*</span></label>
                                                    {{ Form::text('email','',array('class' => 'form-control required email')) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                                 <label class="control-label">Nama <span class="required">*</span></label>
                                                {{ Form::text('name','',array('class' => 'form-control required')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                 <label class="control-label">Telephone <span class="required">*</span></label>
                                                {{ Form::text('phone','',array('class' => 'form-control required digits')) }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Billing Address</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-5">
                                                <div class="form-group">
                                                     <label class="control-label">Negara <span class="required">*</span></label>
                                                    {{ Form::select('country', array('Indonesia' => 'Indonesia'), '',array('class' => 'form-control required')) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="control-label">Kota <span class="required">*</span></label>
                                                    {{ Form::text('city','',array('class' => 'form-control required')) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    {{ Form::label('zip', 'ZIP', array('class' => 'control-label')) }}
                                                    {{ Form::text('zip','',array('class' => 'form-control required digits')) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                                 <label class="control-label">Kecamatan <span class="required">*</span></label>
                                                {{ Form::text('state','',array('class' => 'form-control required')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                 <label class="control-label">Alamat <span class="required">*</span></label>
                                                {{ Form::text('address','',array('class' => 'form-control required')) }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Payment Method</h4>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-5">
                                                <div class="form-group">
                                                    {{ Form::label('payment', 'Payment', array('class' => 'control-label')) }}
                                                    {{ Form::select('payment', array('Cash','Bank','Credit Card','Paypal'), '',array('class' => 'form-control required','id' => 'payment')) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hidden" id="bank">
                                        <div class="col-xs-12">
                                            <div class="col-xs-5">
                                                <p>Bank Account</p>
                                                Make your payment to HSBC bank
                                                Account: ABCD12345
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hidden" id="cc">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-5">
                                                        <div class="form-group">
                                                            {{ Form::label('cc_type', 'CC Type', array('class' => 'control-label')) }}
                                                            {{ Form::select('cc[]', array('MasterCard','Visa'), '',array('class' => 'form-control required')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-3">
                                                        <div class="form-group">
                                                            {{ Form::label('cc_number', 'CC Number', array('class' => 'control-label')) }}
                                                            {{ Form::text('cc[]','',array('class' => 'form-control required')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-3">
                                                        <div class="form-group">
                                                            {{ Form::label('cc_exp', 'CC Expiration Date', array('class' => 'control-label')) }}
                                                            {{ Form::text('cc[]','',array('class' => 'form-control required')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-3">
                                                        <div class="form-group">
                                                            {{ Form::label('cc_cvs', 'CC Security Code', array('class' => 'control-label')) }}
                                                            {{ Form::text('cc[]','',array('class' => 'form-control required')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" class="btn btn-primary" name="Submit" id="pay">
                    </div>
                </div>
            </div>
        </div>
</form>
<script>
    $(function() {
        $('li.active').prev().removeClass("disabled");
        $('.nav li.active').prev().find('a').attr('data-toggle', 'tab');
//        $('#pay').click(function(e) {
//            console.log($('#customer_form').serialize());
//            e.preventDefault();
//        });
        $('#customer_form').bootstrapValidator({
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: 'Please Select Title'
                        }
                    }
                },
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                'email': {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        emailAddress: {
                            message: 'The value is not a valid email address'
                        }
                    }
                },
                'phone': {
                    validators: {
                        notEmpty: {
                            message: 'Phone is required'
                        },
                        numeric: {
                            message: 'Only Numeric Allowed'
                        },
                    }
                },
                'country': {
                    validators: {
                        notEmpty: {
                            message: 'Country is required'
                        }
                    }
                },
                'city': {
                    validators: {
                        notEmpty: {
                            message: 'City is required'
                        }
                    }
                },
                'state': {
                    validators: {
                        notEmpty: {
                            message: 'State is required'
                        }
                    }
                },
                'zip': {
                    validators: {
                        notEmpty: {
                            message: 'ZIP is required'
                        }
                    }
                },
                'address': {
                    validators: {
                        notEmpty: {
                            message: 'Address is required'
                        }
                    }
                },
                'cc[]': {
                    enabled: false,
                    validators: {
                        notEmpty: {
                            message: 'The option required and cannot be empty'
                        },
                        stringLength: {
                            max: 100,
                            message: 'The option must be less than 100 characters long'
                        }
                    }
                }
            }
        }).on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            console.log($form.serialize());

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post("", $form.serialize(), function(result) {
                $('#myTab a[href="#complete"]').tab('show');
                $('#complete').html(result);
            });
        });
        $("#payment").change(function() {

            $('#cc input[type="text"]').val('');
            $('#customer_form').bootstrapValidator('enableFieldValidators', 'cc[]', 'notEmpty', false);
            if ($(this).val() == 1) {
                $('#bank').removeClass("hidden").addClass("show");
                if ($('#cc').hasClass("show")) {
                    $('#cc').removeClass("show").addClass("hidden");
                }
            } else if ($(this).val() == 2) {
                $('#cc').removeClass("hidden").addClass("show");
                if ($('#bank').hasClass("show")) {
                    $('#bank').removeClass("show").addClass("hidden");
                }
                $('#customer_form').bootstrapValidator('enableFieldValidators', 'cc[]', 'notEmpty', true);
            } else if ($('#bank').hasClass("show")) {
                $('#bank').removeClass("show").addClass("hidden");
            } else if ($('#cc').hasClass("show")) {
                $('#cc').removeClass("show").addClass("hidden");
            }
        });
    });
</script>

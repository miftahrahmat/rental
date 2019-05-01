<div class="col-md-4">
</div>
<div class="col-md-8">
</div>
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
                                <td>Pick Up Location :</td>
                                <td>
                                    <p></p>
                                    <p></p>
                                    <input type="hidden" name="pickup" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>Return Location :</td>
                                <td>
                                    <p></p>
                                    <input type="hidden" name="locreturnid" value="" />
                                    <p></p>
                                    <input type="hidden" name="return" value="{" />
                                </td>
                            </tr>
                            <tr>
                                <td>Rental Duration :</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8">
    @foreach($mobils as $car)
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-circle"
                         src="{{ asset('assets/img/type/'.$car->image) }}" alt="{{ $car->Merk->merk.' '.$car->Type->type }}" style="width: 140px; height: 140px;">
                </div>
                <div class=" col-md-9 col-lg-9">

                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Merk Mobil :</td>
                                <td>{{ $car->Merk->merk }}</td>
                            </tr>
                            <tr>
                                <td>Type Mobil :</td>
                                <td>{{ $car->Type->type }}</td>
                            </tr>
                            <tr>
                                <td>Lokasi Mobil :</td>
                                <td>{{ $car->loc->city }}</td>
                            </tr>
                            <tr>
                                <td>Transmissions</td>
                                <td>{{ $car->Type->transmission }}</td>
                            </tr>
                        </tbody>
                    </table>
                    (Harga Sewa : Rp 250.000)
                </div>
            </div>

            <span class="pull-right">
                <button class="btn btn-sm btn-warning" type="button"
                        data-toggle="tooltip"
                        data-original-title="Edit this user" value="{{$car->Type->id.'-'.$car->id}}">Continue</button>
            </span>
        </div>
    </div>
    @endforeach
</div>
<script>

</script>

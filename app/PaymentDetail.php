<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $table = 'payment_details';
    protected $fillable = ['options', 'values', '2nd_values'];

    public function Reservation() {
        return $this->belongsTo('Reservation', 'reservation_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSetting extends Model
{
    protected $table = 'payment_settings';
    protected $fillable = ['days', 'hours','price_per_day','price_per_day_details','price_per_hour','price_per_hour_details','rental_fee','insurance_val','sub_total','tax_val','total_price','deposit_payment'];

}

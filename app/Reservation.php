<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = array('status', 'start', 'end', 'type_id', 'loc_pick', 'loc_return', 'user_id', 'res_detail');


    public function Type() {
        return $this->belongsTo('Type', 'type_id');
    }

    public function Payment(){
        return $this->hasOne('PaymentDetail','reservation_id');
    }

    public function Customer(){
        return $this->belongsTo('Customer','user_id');
    }

    public static function Selectbox() {
        $data = array();
        $checkbox = Type::where('status', 1)->get()->toArray();
        if (!empty($checkbox)) {
            foreach ($checkbox as $check) {
                $data[0] = '-- Choose Type --';
                $data[$check['id']] = $check['type'];
            }
        }
        return $data;
    }
}

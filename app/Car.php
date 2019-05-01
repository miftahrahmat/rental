<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = ['image', 'merk_id', 'type_id', 'nopol', 'warna', 'status'];

    public function Merk() {
        return $this->belongsTo(Merk::class, 'merk_id');
    }

    public function loc() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function Type() {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public static function Checkbox() {
        $data = array();
        $checkbox = Location::where('status', 1)->get()->toArray();
        if (!empty($checkbox)) {
            foreach ($checkbox as $check) {
                $data[$check['id']] = $check['name'];
            }
        }
        return $data;
    }

    public static function Telo() {
        $data = array();
        $cars = Car::all();
        $i = 0;
        if (count($cars) > 0) {
            foreach ($cars as $car) {
                $data[$i] = array(
                    'title' => $car->make . ' ' . $car->model,
                    'start' => date('Y-m-d 20:10:10'),
                    'end' => date('2014-06-12 20:10:10'),
                    'all-day' => FALSE
                );
                $i++;
            }
        }
        return json_encode($data);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extras';
    protected $fillable = ['name', 'price', 'type', 'status'];

    public function Type() {
        return $this->belongsToMany('Type', 'type_extra')->withTimestamps();
    }

    public static function Checkbox() {
        $data = array();
        $checkbox = Extra::where('status', 1)->get()->toArray();
        if (!empty($checkbox)) {
            foreach ($checkbox as $check) {
                $data[$check['id']] = $check['name'];
            }
        }
        return $data;
    }
}

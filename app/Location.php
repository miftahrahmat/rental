<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Location extends Model
{

    protected $table = 'locations';
    protected $fillable = array('name', 'email', 'phone', 'country', 'state', 'city','address', 'zip');
    public $timestamps = true;

    public function Car(){
        return $this->hasMany('car');
    }
}

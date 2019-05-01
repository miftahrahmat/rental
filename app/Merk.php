<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Merk extends Model
{
    protected $table = 'merks';
    protected $fillable = ['merk', 'tahun'];

    public function Car(){
        return $this->hasMany(Car::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Type extends Model
{
    protected $table = 'types';
    protected $fillable = ['type', 'description', 'transmission'];

    public function Car(){
        return $this->hasMany(Car::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';

    protected $primaryKey = 'id';

    public function cars(){
        return $this->belongsTo(Cars::class);
    }
}

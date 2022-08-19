<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'founded',
        'description',
    ];

    public function carsmodel(){
        return $this->hasMany(CarsModel::class);
    }

    public function engines(){
        return $this->hasManyThrough(
            Engine::class, 
            CarsModel::class,
            'cars_id',  
            'model_id'
        );
    }
}

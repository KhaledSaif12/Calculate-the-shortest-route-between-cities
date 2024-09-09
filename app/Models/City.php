<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function distancesFrom()
    {
        return $this->hasMany(Distance::class, 'from_city_id');
    }

    public function distancesTo()
    {
        return $this->hasMany(Distance::class, 'to_city_id');
    }
}

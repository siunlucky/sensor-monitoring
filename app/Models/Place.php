<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function spots()
    {
        return $this->hasMany(Place::class);
    }
}

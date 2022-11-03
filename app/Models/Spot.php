<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }
}

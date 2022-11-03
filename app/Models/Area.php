<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }

    public function spots()
    {
        return $this->hasMany(Spot::class);
    }
}

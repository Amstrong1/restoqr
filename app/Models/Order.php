<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['place_number'];

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    
    public function place()
    {
        return $this->belongsTo(Place::class);
    }
    
    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function getPlaceNumberAttribute()
    {
        return $this->place->number;
    }
    
}

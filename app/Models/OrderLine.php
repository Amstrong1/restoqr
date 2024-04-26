<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function article() {
        return $this->belongsTo(Article::class, 'article_id');
    }
    
    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
    public function goal()
    {
        return $this->hasOne(Goal::class);
    }
    public function social()
    {
        return $this->hasOne(Social::class);
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $append = ['active_formatted'];

    public function getActiveFormattedAttribute()
    {
        return $this->active ? 'Actif' : 'Inactif';
    }

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
    public function places()
    {
        return $this->hasMany(Place::class);
    }
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}

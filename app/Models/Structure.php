<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Article;
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

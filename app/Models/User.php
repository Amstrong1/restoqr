<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    protected $append = ['role_formatted'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }

    public function getRoleFormattedAttribute()
    {
        $role = "";
        switch ($this->role) {
            case 'manager':
                $role = "Gérant";
                break;
            case 'waiter':
                $role = "Serveur";
                break;
            case 'admin':
                $role = "Administrateur";
                break;
            default:
                break;
        }
        return $role;
    }
}

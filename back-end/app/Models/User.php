<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    use HasFactory, Notifiable, HasApiTokens;

    public function cart() {
        return $this->hasOne( Cart::class );
    }

    public function wishlist() {
        return $this->hasOne( Wishlist::class );
    }

    public function orders() {
        return $this->hasMany( Order::class );
    }

   

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'address',
        'payments'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
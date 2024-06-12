<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    public function category() {
        return $this->belongsTo( Category::class );
    }

    public function cart() {
        return $this->belongsTo( Cart::class );
    }

    public function wishlist() {
        return $this->belongsTo( Wishlist::class );
    }
}

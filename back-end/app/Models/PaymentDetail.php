<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class PaymentDetail extends Model
{
    protected $fillable = ['user_id', 'card_number', 'card_holder_name', 'expiration_date', 'cvv'];

    public function setCardNumberAttribute($value)
    {
        $this->attributes['card_number'] = Crypt::encryptString($value);
    }

    public function getCardNumberAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function setCvvAttribute($value)
    {
        $this->attributes['cvv'] = Crypt::encryptString($value);
    }

    public function getCvvAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}

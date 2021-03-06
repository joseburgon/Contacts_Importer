<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = [
        'user_id', 'name', 'birthday', 'phone', 'address', 'card', 'card_brand', 'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->select('name');
    }

}

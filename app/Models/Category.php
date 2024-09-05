<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Category extends Model
{
    use HasFactory;

    public function message(): HasOne
    {
        return $this->hasOne(Message::class);
    }
}

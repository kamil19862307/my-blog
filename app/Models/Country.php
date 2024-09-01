<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';

    public $incrementing = false;

    protected $primaryKey = 'Code';

    protected $keyType = 'string';

    protected $hidden = ['Region', 'LifeExpectancy'];
}

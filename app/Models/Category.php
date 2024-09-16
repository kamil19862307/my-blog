<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Category extends Model
{
    use HasFactory;

    public function message(): HasOne
    {
        return $this->hasOne(Message::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function latestMessage(): HasOne
    {
        return $this->hasOne(Message::class)->latestOfMany();
    }

    public function oldestMessage(): HasOne
    {
        return $this->hasOne(Message::class)->oldestOfMany();
    }

    public function latestActiveMessage(): HasOne
    {
        return $this->hasOne(Message::class)->ofMany([
            'id' => 'max',
        ], function (Builder $query){
            $query->where('status', '=', 1)
            ->where('id', '<>', 3);
        });
    }
}

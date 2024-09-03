<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property bool status
 */
class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'category_id'
    ];

    protected $guarded = [];

    public function isActive(): string
    {
        return $this->status ? 'Active' : 'Disabled';
    }
}

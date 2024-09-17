<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
//        return $this->belongsToMany(Tag::class)->as('ca')->withPivot(['created_at']);
//        return $this->belongsToMany(Tag::class)->withPivot(['created_at']);
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}

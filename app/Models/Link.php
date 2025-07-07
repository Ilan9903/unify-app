<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'url',
        'order',
    ];

    /**
     * Get the user that owns the link.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
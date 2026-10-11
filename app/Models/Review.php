<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'reviewer_name',
        'rating',
        'review_text',
        'review_date',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'review_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('review_date');
    }

    public function getInitialAttribute(): string
    {
        return mb_strtoupper(mb_substr($this->reviewer_name, 0, 1));
    }
}

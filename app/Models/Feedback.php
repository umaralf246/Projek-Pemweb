<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    protected $fillable = ['registration_id', 'name', 'feedback'];

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}
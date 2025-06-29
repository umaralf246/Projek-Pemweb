<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
    'event_id',
    'user_id',
    'name',
    'email',
    'phone',
    'reason',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function feedback()
{
    return $this->hasOne(Feedback::class);
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'cost', 'subscription_type', 'title', 'punkt1', 'punkt2', 'punkt3'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
}

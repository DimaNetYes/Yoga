<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['cost', 'subscription_type'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

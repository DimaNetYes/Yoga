<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration'];

    public function prices()
    {
        return $this->hasMany("App\Models\Price");
    }

    public function subscriptions()
    {
        return $this->hasMany("App\Models\Subscription");
    }

    public function schedules()
    {
        return $this->hasMany("App\Models\Schedule");
    }

    public function enrollments()
    {
        return $this->hasMany("App\Models\Enrollment");
    }
}

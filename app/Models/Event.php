<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'start_time', 'end_time', 'recurrence', 'event_id'];

    // Определяем отношение для связи с родительским событием
    public function parentEvent()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    // Определяем отношение для связи с дочерними событиями
    public function childEvents()               //events
    {
        return $this->hasMany(Event::class, 'event_id');
    }
}

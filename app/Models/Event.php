<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        'id',
        'name',
        'event_venue_id',
        'event_date',
        'event_image',
        'event_info',
        'event_info_contact',
        'active',
    ];
}

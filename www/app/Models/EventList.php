<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventList extends Model
{
    use HasFactory;

    protected $table = "event_lists";

    protected $fillable = [
        'id',
        'name',
        'event_id',
        'description',
        'type',
        'list_end_date'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleList extends Model
{
    use HasFactory;

    protected $table = "peoples_list";

    protected $fillable = [
        'id',
        'event_id',
        'people_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = "peoples";

    protected $fillable = [
        'id',
        'name',
        'document',
        'email',
        'phone',
        'birth_date'
    ];
}

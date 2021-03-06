<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    use HasFactory;

    protected $fillable = [
        'joke_id', 'setup', 'delivery'
    ];


}

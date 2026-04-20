<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    // Add this line below
    protected $fillable = ['name', 'message'];
}
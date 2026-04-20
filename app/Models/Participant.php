<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    // This tells Laravel exactly which table to look for
    protected $table = 'participants';

    // This allows the RSVP form to save data
    protected $fillable = ['name', 'message'];
}
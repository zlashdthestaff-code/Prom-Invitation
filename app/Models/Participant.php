<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    // Added 'attendance' to allow saving the yes/no status
    protected $fillable = ['name', 'message', 'attendance'];
}
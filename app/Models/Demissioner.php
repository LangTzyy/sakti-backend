<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demissioner extends Model
{
    protected $fillable = ['name', 'role', 'period', 'image'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['role', 'position_key', 'name', 'image', 'visi', 'misi'];

    protected function casts(): array
        {
            return [
                'misi' => 'array',
            ];
        }
}

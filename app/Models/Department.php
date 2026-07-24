<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['slug', 'name', 'description', 'jobdesk', 'programs', 'skills', 'projects'];

    protected function casts(): array
    {
        return [
            'programs' => 'array',
            'skills' => 'array',
            'projects' => 'array',
        ];
    }

    public function members()
    {
        return $this->hasMany(DepartmentMember::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentMember extends Model
{
    protected $fillable = ['department_id', 'name', 'role', 'image'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
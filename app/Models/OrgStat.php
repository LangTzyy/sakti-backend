<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgStat extends Model
{
    protected $table = 'org_stats';

    protected $fillable = ['label', 'number', 'suffix', 'order'];
}

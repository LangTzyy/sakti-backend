<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgContact extends Model
{
    protected $table = 'org_contact';

    protected $fillable = ['address', 'email', 'office_hours', 'maps_query', 'instagram_url', 'linkedin_url', 'github_url'];
}

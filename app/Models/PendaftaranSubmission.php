<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranSubmission extends Model
{
    protected $fillable = [
        'nama', 'ttl', 'email', 'nim', 'whatsapp', 'motivasi',
        'foto_ktm_url', 'cv_url', 'sertifikat_url', 'status',
    ];
}

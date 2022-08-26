<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDescrption extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'job_announcements_id',
        'subject',
        'email',
        'position',
        'phoneNum',
        'yearsOfExp',
        'name',
        'letter',
        
    ];
}

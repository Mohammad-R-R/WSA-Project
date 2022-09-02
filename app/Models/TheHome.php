<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheHome extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'desc',
        'background',
        'ads-title',
        'images',
        'link',
        'prom',
        'prom_desc',
        'our',
        'team_images',
        'position',
        'member_desc'
    ];
}

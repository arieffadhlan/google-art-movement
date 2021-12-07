<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'title',
        'detail',
        'desc',
        'image',
        'year',
        'entites_id',
        'partner_id',
        'artist_id',
    ];
    use HasFactory;
}

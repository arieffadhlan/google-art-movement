<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exibit extends Model
{
    protected $fillable = [
        'title',
        'date',
        'detail',
        'image',
        'entites_id',
        'partner_id',
    ];

    use HasFactory;
}

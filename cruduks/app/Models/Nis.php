<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nis extends Model
{
    use HasFactory;
    protected $primaryKey = 'nis';
    protected $fillable = [
        'nis',
        'name',
        'jk',
    ];
}

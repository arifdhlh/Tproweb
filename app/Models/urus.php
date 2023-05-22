<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urus extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kelas', 'linkig','image'];
}

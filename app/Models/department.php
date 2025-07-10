<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $guarded = [];
    protected $fillable = [
        'title',
        'image',
        'description',
        'short_des',
      
    ];
}

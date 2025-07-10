<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'education',
        'department_id',
        'appointment_charge',
        'experience',
        'image',
    ];


}

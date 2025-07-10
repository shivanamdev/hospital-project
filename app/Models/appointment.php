<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $guarded = [];
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'number',
        'department_id',
        'doctor_id',
        'datetime',
        'visit',
        'msg',
       
        
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productquery extends Model
{
    use HasFactory;
    protected $table = 'productqueries';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'qty',
       
    ];
}

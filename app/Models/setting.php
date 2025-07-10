<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'web_logo',
        'email',
        'number',
        'address',
        'city',
        'state',
        'postal_code',
        'fb_url',
        'insta_url',
        'twitter_url',
        'meta_title',
        'meta_discription',
        'meta_keywords',
      
    ];


}

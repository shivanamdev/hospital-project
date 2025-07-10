<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $guarded = [];
    protected $fillable = [
        'title',
       
      
    ];


    public function galleryimages()
    {
        return $this->hasMany('App\Models\galleryimage');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryimage extends Model
{
    use HasFactory;
   
    protected $table = 'galleryimages';
    protected $guarded = [];
    protected $fillable = [
        'title_id',
        'images',
      
    ];
   
    public function parentgalleryimages()
    {
        $this->belongsTo('App\Models\gallery');

    }

}

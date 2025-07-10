<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
class subcategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    protected $guarded = [];
    protected $fillable = [
      
    ];

public function cate(){

    return $this->belongsTo('App\Models\category','id');
}



}

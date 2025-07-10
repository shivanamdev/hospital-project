<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subcategory;
class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];
    protected $fillable = [
      
       
      
    ];


    public function sub()
    {
        return $this->hasMany('App\Models\subcategory','pairent_id');
    }



}

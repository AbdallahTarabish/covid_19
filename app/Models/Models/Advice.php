<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    protected $fillable=["headline","subtitle" , "image"];
    public function getImageAttribute($val)
    {
        return asset("upload/".$val);
    }

}

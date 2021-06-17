<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    use HasFactory;
    protected $fillable=["title" , "subject" , "image"];
    public function getImageAttribute($val)
    {
        return asset("upload/".$val);
    }
}

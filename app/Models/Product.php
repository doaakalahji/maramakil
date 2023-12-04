<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name_en" , "name_ar","name_tr" ,"price" ,
     "description_en" , "description_ar" , "description_tr",
      "image" , "video"];

      public function getNameAttribute($value) {
        return $this->{'name_'.App::getLocale()};
    }

    public function getDescriptionAttribute($value) {
        return $this->{'description_'.App::getLocale()};
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ["user_id" ,"username","bio","phone_1",
                           "address_1" , "address_2" , "whatsup",
                           "facebook", "instagram" , "image"];

    public function user(): BelongsTo
    {
          return $this->belongsTo(User::class);
     }                          
}

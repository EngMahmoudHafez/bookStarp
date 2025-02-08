<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function favorites()
    {
        return $this->hasMany(userBook::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'cart')->withTimestamps();
    }

}

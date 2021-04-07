<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $gaurded = [];

    public function student()
    {
        return $this->hasMany(User::class);
    }
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}

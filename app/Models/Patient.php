<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Autheticatable
{
    use HasFactory;

    protected $fillable = ["contact","name","email","address","password"];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}

<?php

namespace Modules\AuthModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\AuthModule\Database\factories\AuthApiFactory;

class AuthApi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): AuthApiFactory
    {
        //return AuthApiFactory::new();
    }
}

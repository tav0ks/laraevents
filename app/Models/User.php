<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'password',
        'role'
    ];

    protected $hidden = [
        'password'
    ];

    //relationships
    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    //mutators
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

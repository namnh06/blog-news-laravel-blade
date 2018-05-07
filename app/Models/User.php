<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password', 'dob', 'phone', 'address',
    ];
    protected $hidden = [
        'password', 'remember_token', 'state',
    ];
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role')->as('role_user')->withTimestamps();
    }
}

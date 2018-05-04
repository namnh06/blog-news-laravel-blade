<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use SoftDeletes;
    protected $table = 'role_user';
    protected $primaryKey = 'id';
    protected $fillable = [
        '',
    ];
    protected $hidden = [
        '',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}

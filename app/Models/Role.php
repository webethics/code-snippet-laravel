<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;
use App\Models\RolePermission;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'role_id', 'slug'
    ];

    /* role belongs to many users */
    public function users()
    {
        return $this->belongsToMany(UserRole::class);
    }
    /* role has many permissions */
    public function permissions()
    {
        return $this->hasMany(RolePermission::class);
    }
}

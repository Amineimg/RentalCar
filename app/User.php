<?php

namespace App;

use App\Constants\Constant;
use App\Models\Admin\Admin;
use App\Models\Admin\Owner;
use App\Models\Role;
use App\Models\UserInfo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Allow columns to be filled with data
    protected $fillable = [
        'username', 'email', 'password', 'role_id', 'is_active'
    ];

    // Hidden fields
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Return the role of a user
    public function role(){
       return $this->belongsTo(Role::class,"role_id","id");
    }

    // Is user admin and active
    public function isAdmin(){
        if($this->role->id == Constant::super_admin_role && $this->is_active){
            return true;
        }else return false;
    }

    // Is user admin and active
    public function isOwner(){
        if($this->role->id == Constant::admin_role && $this->is_active){
            return true;
        }else return false;
    }

    // Is user user and active
    public function isUser(){
        if($this->role->id == Constant::user_role && $this->is_active){
            return true;
        }else return false;
    }

    // Return admin's data
    public function admin(){
        return $this->hasOne(Admin::class);
    }

    // Return owner's data
    public function owner(){
        return $this->hasOne(Owner::class);
    }
    // Return user's data
    public function user(){
        return $this->hasOne(UserInfo::class);
    }

    // Return corresponding information about the user
    public function info(){
        $role_id = $this->role_id;
        switch($role_id){
            case Constant::super_admin_role: return $this->hasOne(Admin::class); break;
            case Constant::admin_role: return $this->hasOne(Owner::class); break;
            case Constant::user_role: return $this->hasOne(User::class); break;
        }
    }
}

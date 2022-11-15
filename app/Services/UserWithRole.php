<?php

namespace App\Services;

use App\Exceptions\RoleNotFoundException;
use App\Models\User;
use TCG\Voyager\Models\Role;

class UserWithRole
{
    private $role;
    function __construct($role)
    {
        $this->role = $role;
    }

    public function get()
    {
        $role_id = optional(Role::where('display_name', $this->role)->first())->id;
        if($role_id==null){
            throw new RoleNotFoundException('Drivers not found');
        }
        $drivers = User::where('role_id', $role_id)->get();
        return $drivers;
    }
}

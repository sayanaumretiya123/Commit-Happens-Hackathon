<?php

namespace App\Services;

use App\Models\Role;
use App\Services\Contracts\RoleServiceInterface;

class RoleService implements RoleServiceInterface
{
    public function getAllRoles()
    {
        return Role::all();
    }

    public function getRoleById(int $id)
    {
        return Role::findOrFail($id);
    }

    public function getRoleBySlug(string $slug)
    {
        return Role::where('slug', $slug)->firstOrFail();
    }

    public function createRole(array $data)
    {
        return Role::create($data);
    }

    public function updateRole(int $id, array $data)
    {
        $role = Role::findOrFail($id);
        $role->update($data);
        return $role;
    }

    public function deleteRole(int $id)
    {
        $role = Role::findOrFail($id);
        return $role->delete();
    }
}

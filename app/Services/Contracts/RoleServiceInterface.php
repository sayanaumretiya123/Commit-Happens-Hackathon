<?php

namespace App\Services\Contracts;

use App\Models\Role;

interface RoleServiceInterface
{
    public function getAllRoles();
    public function getRoleById(int $id);
    public function getRoleBySlug(string $slug);
    public function createRole(array $data);
    public function updateRole(int $id, array $data);
    public function deleteRole(int $id);
}

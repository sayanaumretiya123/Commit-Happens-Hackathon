<?php

namespace App\Services;

use App\Models\User;
use App\Models\Role;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    public function getAllUsers()
    {
        return User::with('role')->get();
    }

    public function getUserById(int $id)
    {
        return User::with('role')->findOrFail($id);
    }

    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public function updateUser(int $id, array $data)
    {
        $user = User::findOrFail($id);
        
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        
        $user->update($data);
        return $user;
    }

    public function deleteUser(int $id)
    {
        $user = User::findOrFail($id);
        return $user->delete();
    }

    public function assignRole(int $userId, int $roleId)
    {
        $user = User::findOrFail($userId);
        $role = Role::findOrFail($roleId);
        
        $user->role_id = $role->id;
        $user->save();
        
        return $user;
    }
}

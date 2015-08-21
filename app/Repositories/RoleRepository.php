<?php
namespace App\Repositories;

use Bican\Roles\Models\Role;

class RoleRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Role::class;
    }
}

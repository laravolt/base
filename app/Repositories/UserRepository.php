<?php
namespace App\Repositories;

use App\User;

class UserRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return User::class;
    }
}

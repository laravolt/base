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

    /**
     * @param array $data
     * @param array $roles
     * @return mixed
     */
    public function createWithRoles(array $data, array $roles)
    {
        $user =  parent::create($data);
        collect($roles)->each(function($role) use ($user){
            $user->attachRole($role);
        });

        return $user;
    }

    /**
     * @param $id
     * @param array $data
     * @param array $roles
     * @return mixed
     */
    public function updateWithRoles($id, array $data, array $roles)
    {
        $user = $id;

        if(! $user instanceof User) {
            $user = $this->find($id);
        }
        $updated = parent::update($data, $id);

        if($updated) {
            $user->detachAllRoles();
            collect($roles)->each(function($role) use ($user){
                $user->attachRole($role);
            });
        }

        return $user;
    }


}

<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

abstract class BaseRepository extends Repository
{
    public function count()
    {
        $this->applyCriteria();
        return $this->model->count();
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 20, $columns = array('*'))
    {
        return parent::paginate($perPage, $columns);
    }


}

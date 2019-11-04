<?php

namespace App\Repository;

use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface RepositoryInterface
{
    public function findById(int $id);
    public function getModelAll();
}

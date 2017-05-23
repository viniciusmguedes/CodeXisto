<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PhotoRepository;
use App\Models\Photo;
use App\Validators\PhotoValidator;

/**
 * Class PhotoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PhotoRepositoryEloquent extends BaseRepository implements PhotoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Photo::class;
    }

    public function where($name, $p, $value)
    {
        return Photo::where($name, $p, $value);
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

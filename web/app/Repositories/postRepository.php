<?php

namespace App\Repositories;

use App\Models\post;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class postRepository
 * @package App\Repositories
 * @version December 5, 2017, 3:00 am UTC
 *
 * @method post findWithoutFail($id, $columns = ['*'])
 * @method post find($id, $columns = ['*'])
 * @method post first($columns = ['*'])
*/
class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return post::class;
    }
}

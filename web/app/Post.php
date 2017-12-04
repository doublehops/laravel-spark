<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post.
 *
 * @author  The scaffold-interface created at 2017-12-04 04:16:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Post extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];


    protected $table = 'posts';

    public $rules = [
        'title' => 'required',
        'user_id' => 'required|integer',
        'content' => 'required',
    ];
}

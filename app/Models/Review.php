<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Review
 * @package App\Models
 * @version June 25, 2021, 4:56 am UTC
 *
 * @property integer $product_id
 * @property integer $vote
 * @property string $review
 * @property string $first_name
 * @property string $user_email
 * @property integer $user_id
 * @property boolean $is_moderate
 * @property string $second_name
 */
class Review extends Model
{


    public $table = 'review';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'vote',
        'review',
        'first_name',
        'user_email',
        'user_id',
        'is_moderate',
        'second_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'vote' => 'integer',
        'review' => 'string',
        'first_name' => 'string',
        'user_email' => 'string',
        'user_id' => 'integer',
        'is_moderate' => 'boolean',
        'second_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'nullable|integer',
        'vote' => 'required',
        'review' => 'required|string',
        'first_name' => 'nullable|string|max:255',
        'user_email' => 'nullable|string|max:255',
        'user_id' => 'nullable|integer',
        'is_moderate' => 'required|boolean',
        'second_name' => 'nullable|string|max:255'
    ];

    
}

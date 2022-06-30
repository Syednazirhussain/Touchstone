<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ShoppingCart
 * @package App\Models
 * @version June 25, 2021, 4:57 am UTC
 *
 * @property string $instance
 * @property string $content
 */
class ShoppingCart extends Model
{


    public $table = 'shoppingcart';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'instance',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'identifier' => 'string',
        'instance' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'instance' => 'required|string|max:255',
        'content' => 'required|string'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Cache
 * @package App\Models
 * @version June 25, 2021, 4:45 am UTC
 *
 * @property string $key
 * @property string $value
 * @property integer $expiration
 */
class Cache extends Model
{


    public $table = 'cache';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'key',
        'value',
        'expiration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'key' => 'string',
        'value' => 'string',
        'expiration' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'key' => 'required|string|max:255',
        'value' => 'required|string',
        'expiration' => 'required|integer'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Cart
 * @package App\Models
 * @version June 25, 2021, 4:45 am UTC
 *
 * @property string $subject
 * @property integer $key_id
 * @property integer $qnt
 * @property number $price
 * @property integer $user_id
 * @property boolean $auto_ship
 * @property string $next_process_date
 */
class Cart extends Model
{


    public $table = 'cart';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'subject',
        'key_id',
        'qnt',
        'price',
        'user_id',
        'auto_ship',
        'next_process_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subject' => 'string',
        'key_id' => 'integer',
        'qnt' => 'integer',
        'price' => 'float',
        'user_id' => 'integer',
        'auto_ship' => 'boolean',
        'next_process_date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject' => 'required|string|max:255',
        'key_id' => 'required|integer',
        'qnt' => 'required|integer',
        'price' => 'required|numeric',
        'user_id' => 'required|integer',
        'auto_ship' => 'required|boolean',
        'next_process_date' => 'nullable|string|max:255'
    ];

    
}

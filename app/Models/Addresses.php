<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Addresses
 * @package App\Models
 * @version June 25, 2021, 4:34 am UTC
 *
 * @property string $ship_name
 * @property string $ship_address1
 * @property string $ship_address2
 * @property string $ship_city
 * @property string $postal_code
 * @property string $ship_state
 * @property integer $ship_country
 * @property string $phone
 * @property integer $user_id
 * @property integer $type
 * @property integer $is_default
 * @property integer $ccId
 */
class Addresses extends Model
{


    public $table = 'addresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'ship_name',
        'ship_address1',
        'ship_address2',
        'ship_city',
        'postal_code',
        'ship_state',
        'ship_country',
        'phone',
        'user_id',
        'type',
        'is_default',
        'ccId'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ship_name' => 'string',
        'ship_address1' => 'string',
        'ship_address2' => 'string',
        'ship_city' => 'string',
        'postal_code' => 'string',
        'ship_state' => 'string',
        'ship_country' => 'integer',
        'phone' => 'string',
        'user_id' => 'integer',
        'type' => 'integer',
        'is_default' => 'integer',
        'ccId' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ship_name' => 'nullable|string|max:255',
        'ship_address1' => 'nullable|string|max:255',
        'ship_address2' => 'nullable|string|max:255',
        'ship_city' => 'nullable|string|max:255',
        'postal_code' => 'nullable|string|max:255',
        'ship_state' => 'nullable|string|max:255',
        'ship_country' => 'nullable|integer',
        'phone' => 'nullable|string|max:255',
        'user_id' => 'nullable|integer',
        'type' => 'required',
        'is_default' => 'required',
        'ccId' => 'nullable|integer'
    ];

    
}

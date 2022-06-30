<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class OrderHistory
 * @package App\Models
 * @version June 25, 2021, 4:51 am UTC
 *
 * @property integer $user_id
 * @property integer $product_id
 * @property number $price
 * @property number $price_gbp
 * @property integer $count
 * @property integer $address_id
 * @property integer $card_id
 * @property boolean $is_autoship
 * @property string $status
 */
class OrderHistory extends Model
{


    public $table = 'order_history';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'product_id',
        'price',
        'price_gbp',
        'count',
        'address_id',
        'card_id',
        'is_autoship',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer',
        'price' => 'decimal:2',
        'price_gbp' => 'decimal:2',
        'count' => 'integer',
        'address_id' => 'integer',
        'card_id' => 'integer',
        'is_autoship' => 'boolean',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable|integer',
        'product_id' => 'nullable|integer',
        'price' => 'required|numeric',
        'price_gbp' => 'nullable|numeric',
        'count' => 'required',
        'address_id' => 'required|integer',
        'card_id' => 'required|integer',
        'is_autoship' => 'required|boolean',
        'status' => 'nullable|string|max:255'
    ];

    
}

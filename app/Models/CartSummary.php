<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class CartSummary
 * @package App\Models
 * @version June 25, 2021, 4:46 am UTC
 *
 * @property boolean $type_points
 * @property integer $user_id
 * @property boolean $user_assigned_type
 * @property boolean $status_cart
 * @property integer $user_assigned_id
 * @property integer $user_assigned_customer_type_id
 * @property boolean $is_new_customer
 * @property string $promocode
 */
class CartSummary extends Model
{


    public $table = 'cart_summary';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'type_points',
        'user_id',
        'user_assigned_type',
        'status_cart',
        'user_assigned_id',
        'user_assigned_customer_type_id',
        'is_new_customer',
        'promocode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_points' => 'boolean',
        'user_id' => 'integer',
        'user_assigned_type' => 'boolean',
        'status_cart' => 'boolean',
        'user_assigned_id' => 'integer',
        'user_assigned_customer_type_id' => 'integer',
        'is_new_customer' => 'boolean',
        'promocode' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_points' => 'nullable|boolean',
        'user_id' => 'required|integer',
        'user_assigned_type' => 'nullable|boolean',
        'status_cart' => 'required|boolean',
        'user_assigned_id' => 'nullable|integer',
        'user_assigned_customer_type_id' => 'nullable|integer',
        'is_new_customer' => 'nullable|boolean',
        'promocode' => 'nullable|string|max:255'
    ];

    
}

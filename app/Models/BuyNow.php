<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class BuyNow
 * @package App\Models
 * @version June 25, 2021, 4:44 am UTC
 *
 * @property integer $country_id
 * @property string $coupon_code
 * @property string $currency
 * @property string $ref
 * @property boolean $is_auto_ship
 * @property boolean $is_active
 * @property string $name
 * @property string $slug
 */
class BuyNow extends Model
{


    public $table = 'buy_now';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'country_id',
        'coupon_code',
        'currency',
        'ref',
        'is_auto_ship',
        'is_active',
        'name',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'coupon_code' => 'string',
        'currency' => 'string',
        'ref' => 'string',
        'is_auto_ship' => 'boolean',
        'is_active' => 'boolean',
        'name' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country_id' => 'nullable|integer',
        'coupon_code' => 'nullable|string|max:255',
        'currency' => 'nullable|string|max:255',
        'ref' => 'nullable|string|max:255',
        'is_auto_ship' => 'required|boolean',
        'is_active' => 'required|boolean',
        'name' => 'required|string|max:255',
        // 'slug' => 'required|string|max:255'
    ];

    public function buy_now_products() 
    {
        return $this->hasMany(\App\Models\BuyNowProducts::class, 'buy_now_id', 'id');
    }


}

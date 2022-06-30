<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Countries
 * @package App\Models
 * @version June 25, 2021, 4:47 am UTC
 *
 * @property string $name
 * @property string $iso3
 * @property string $currency
 * @property boolean $is_active
 * @property number $min_checkout_price
 * @property number $max_checkout_price
 * @property integer $max_checkout_unit_count
 * @property boolean $show_subscribing_ontraport
 * @property boolean $has_shipping
 * @property boolean $has_residence
 */
class Countries extends Model
{


    public $table = 'countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'iso3',
        'currency',
        'is_active',
        'min_checkout_price',
        'max_checkout_price',
        'max_checkout_unit_count',
        'show_subscribing_ontraport',
        'has_shipping',
        'has_residence'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'iso3' => 'string',
        'currency' => 'string',
        'is_active' => 'boolean',
        'min_checkout_price' => 'decimal:2',
        'max_checkout_price' => 'decimal:2',
        'max_checkout_unit_count' => 'integer',
        'show_subscribing_ontraport' => 'boolean',
        'has_shipping' => 'boolean',
        'has_residence' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|array',
        'iso3' => 'required|string|max:255',
        'currency' => 'required|string|max:3',
        'is_active' => 'required|boolean',
        'min_checkout_price' => 'required|numeric',
        'max_checkout_price' => 'required|numeric',
        'max_checkout_unit_count' => 'required|integer',
        'show_subscribing_ontraport' => 'nullable|boolean',
        'has_shipping' => 'required|boolean',
        'has_residence' => 'required|boolean'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class CountryProducts
 * @package App\Models
 * @version June 25, 2021, 4:47 am UTC
 *
 * @property integer $country_id
 * @property integer $product_id
 * @property integer $max_buy_count
 * @property boolean $is_active
 * @property boolean $is_pack
 * @property boolean $is_best_pack
 */
class CountryProducts extends Model
{


    public $table = 'country_products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'country_id',
        'product_id',
        'max_buy_count',
        'is_active',
        'is_pack',
        'is_best_pack'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'product_id' => 'integer',
        'max_buy_count' => 'integer',
        'is_active' => 'boolean',
        'is_pack' => 'boolean',
        'is_best_pack' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country_id' => 'required|integer',
        'product_id' => 'required|integer',
        'max_buy_count' => 'required|integer',
        'is_active' => 'required|boolean',
        'is_pack' => 'nullable|boolean',
        'is_best_pack' => 'nullable|boolean'
    ];

    
}

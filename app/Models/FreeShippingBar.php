<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class FreeShippingBar
 * @package App\Models
 * @version June 25, 2021, 4:49 am UTC
 *
 * @property integer $country_id
 * @property number $price
 * @property string $text
 */
class FreeShippingBar extends Model
{


    public $table = 'free_shipping_bar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'country_id',
        'price',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'price' => 'decimal:2',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country_id' => 'required|integer',
        'price' => 'nullable|numeric',
        'text' => 'nullable|array'
    ];

    public function country() 
    {
        return $this->hasOne(\App\Models\Countries::class, 'id', 'country_id');
    }
}

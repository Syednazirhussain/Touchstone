<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class BuyNowProducts
 * @package App\Models
 * @version June 25, 2021, 4:44 am UTC
 *
 * @property integer $buy_now_id
 * @property integer $product_id
 * @property integer $quantity
 */
class BuyNowProducts extends Model
{


    public $table = 'buy_now_products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'buy_now_id',
        'product_id',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'buy_now_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'buy_now_id' => 'required|integer',
        'product_id' => 'required|integer',
        'quantity' => 'required|integer'
    ];

    public function product() 
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id', 'id');
    }


}

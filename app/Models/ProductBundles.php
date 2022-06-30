<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductBundles
 * @package App\Models
 * @version June 25, 2021, 4:54 am UTC
 *
 * @property integer $product_id
 * @property integer $bundle_product_id
 * @property integer $order
 * @property integer $count_product
 * @property string $title
 * @property string $price_text
 */
class ProductBundles extends Model
{


    public $table = 'product_bundles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'bundle_product_id',
        'order',
        'count_product',
        'title',
        'price_text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'bundle_product_id' => 'integer',
        'order' => 'integer',
        'count_product' => 'integer',
        'title' => 'string',
        'price_text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'nullable|integer',
        'bundle_product_id' => 'nullable|integer',
        'order' => 'nullable|integer',
        'count_product' => 'required|integer',
        'title' => 'nullable|array',
        'price_text' => 'nullable|array'
    ];

    public function product () {

        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    public function bundle_product () {

        return $this->belongsTo(\App\Models\Product::class, 'bundle_product_id');
    }

    
}

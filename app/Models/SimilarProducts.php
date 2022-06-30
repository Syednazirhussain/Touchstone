<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class SimilarProducts
 * @package App\Models
 * @version June 25, 2021, 4:58 am UTC
 *
 * @property integer $product_id
 * @property integer $similar_product_id
 */
class SimilarProducts extends Model
{


    public $table = 'similar_products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'similar_product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'similar_product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required|integer',
        'similar_product_id' => 'required|integer'
    ];

    public function product () {

        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    public function similar_product () {

        return $this->belongsTo(\App\Models\Product::class, 'similar_product_id');
    }

}

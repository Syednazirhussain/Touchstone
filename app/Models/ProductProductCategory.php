<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductProductCategory
 * @package App\Models
 * @version June 25, 2021, 4:55 am UTC
 *
 * @property integer $product_id
 * @property integer $category_id
 */
class ProductProductCategory extends Model
{


    public $table = 'product_product_category';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $timestamps = false;

    public $fillable = [
        'product_id',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'nullable|integer',
        'category_id' => 'nullable|integer'
    ];

    public function product_category () {

        return $this->belongsTo(\App\Models\ProductCategory::class, 'category_id');
    }
    
}

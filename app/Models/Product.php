<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Product
 * @package App\Models
 * @version June 25, 2021, 4:53 am UTC
 *
 * @property string $sku
 * @property string $description
 * @property number $price_retail
 * @property number $price_wholesale
 * @property number $price_retail_gbp
 * @property number $price_wholesale_gbp
 * @property number $price_discounted
 * @property number $price_discounted_gbp
 * @property number $cv
 * @property number $cv_gbp
 * @property boolean $is_moderate
 * @property string $body
 * @property integer $category_id
 * @property integer $product_id
 * @property string $supply
 * @property string $url
 * @property string $type
 * @property string $meta_title
 * @property string $meta_description
 * @property integer $main_file_id
 * @property string $order
 * @property string $title
 * @property number $price_retail_eur
 * @property number $price_retail_yen
 * @property number $price_wholesale_eur
 * @property number $price_wholesale_yen
 * @property number $price_discounted_eur
 * @property number $price_discounted_yen
 * @property number $cv_eur
 * @property number $cv_yen
 * @property boolean $is_show_autoship
 * @property boolean $is_popular
 * @property number $bundles_savings
 * @property number $bundles_savings_gbp
 * @property boolean $is_contains_hemp
 * @property boolean $is_show_in_vbo_catalog
 * @property integer $best_seller_rank
 * @property integer $opengraph_image_id
 * @property boolean $only_available_vbo
 * @property integer $bottle_count
 */
class Product extends Model
{


    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'sku',
        'description',
        'price_retail',
        'price_wholesale',
        'price_retail_gbp',
        'price_wholesale_gbp',
        'price_discounted',
        'price_discounted_gbp',
        'cv',
        'cv_gbp',
        'is_moderate',
        'body',
        'category_id',
        'product_id',
        'supply',
        'url',
        'type',
        'meta_title',
        'meta_description',
        'main_file_id',
        'order',
        'title',
        'price_retail_eur',
        'price_retail_yen',
        'price_wholesale_eur',
        'price_wholesale_yen',
        'price_discounted_eur',
        'price_discounted_yen',
        'cv_eur',
        'cv_yen',
        'is_show_autoship',
        'is_popular',
        'bundles_savings',
        'bundles_savings_gbp',
        'is_contains_hemp',
        'is_show_in_vbo_catalog',
        'best_seller_rank',
        'opengraph_image_id',
        'only_available_vbo',
        'bottle_count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sku' => 'string',
        'description' => 'string',
        'price_retail' => 'decimal:2',
        'price_wholesale' => 'decimal:2',
        'price_retail_gbp' => 'decimal:2',
        'price_wholesale_gbp' => 'decimal:2',
        'price_discounted' => 'decimal:2',
        'price_discounted_gbp' => 'decimal:2',
        'cv' => 'decimal:2',
        'cv_gbp' => 'decimal:2',
        'is_moderate' => 'boolean',
        'body' => 'string',
        'category_id' => 'integer',
        'product_id' => 'integer',
        'supply' => 'string',
        'url' => 'string',
        'type' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'main_file_id' => 'integer',
        'order' => 'string',
        'title' => 'string',
        'price_retail_eur' => 'float',
        'price_retail_yen' => 'float',
        'price_wholesale_eur' => 'float',
        'price_wholesale_yen' => 'float',
        'price_discounted_eur' => 'float',
        'price_discounted_yen' => 'float',
        'cv_eur' => 'float',
        'cv_yen' => 'float',
        'is_show_autoship' => 'boolean',
        'is_popular' => 'boolean',
        'bundles_savings' => 'decimal:2',
        'bundles_savings_gbp' => 'decimal:2',
        'is_contains_hemp' => 'boolean',
        'is_show_in_vbo_catalog' => 'boolean',
        'best_seller_rank' => 'integer',
        'opengraph_image_id' => 'integer',
        'only_available_vbo' => 'boolean',
        'bottle_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sku' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'price_retail' => 'nullable|numeric',
        'price_wholesale' => 'nullable|numeric',
        'price_retail_gbp' => 'nullable|numeric',
        'price_wholesale_gbp' => 'nullable|numeric',
        'price_discounted' => 'nullable|numeric',
        'price_discounted_gbp' => 'nullable|numeric',
        'cv' => 'nullable|numeric',
        'cv_gbp' => 'nullable|numeric',
        // 'is_moderate' => 'required|boolean',
        'body' => 'nullable|array',
        'category_id' => 'nullable|integer',
        'product_id' => 'nullable|integer',
        'supply' => 'nullable|array',
        'url' => 'nullable|string|max:255',
        // 'type' => 'required|string',
        'meta_title' => 'nullable|array',
        'meta_description' => 'nullable|array',
        'main_file_id' => 'nullable|integer',
        'order' => 'nullable|string|max:255',
        'title' => 'nullable|array',
        // 'price_retail_eur' => 'required|numeric',
        // 'price_retail_yen' => 'required|numeric',
        // 'price_wholesale_eur' => 'required|numeric',
        // 'price_wholesale_yen' => 'required|numeric',
        // 'price_discounted_eur' => 'required|numeric',
        // 'price_discounted_yen' => 'required|numeric',
        // 'cv_eur' => 'required|numeric',
        // 'cv_yen' => 'required|numeric',
        'is_show_autoship' => 'nullable|boolean',
        'is_popular' => 'nullable|boolean',
        'bundles_savings' => 'nullable|numeric',
        'bundles_savings_gbp' => 'nullable|numeric',
        'is_contains_hemp' => 'nullable|boolean',
        'is_show_in_vbo_catalog' => 'nullable|boolean',
        'best_seller_rank' => 'nullable|integer',
        'opengraph_image_id' => 'nullable|integer',
        // 'only_available_vbo' => 'required|boolean',
        // 'bottle_count' => 'required|integer'
    ];


    public function product_product_categories () {

        return $this->hasMany(\App\Models\ProductProductCategory::class, 'product_id');
    }

    public function file () {

        return $this->belongsTo(\App\Models\File::class, 'main_file_id');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(\App\Models\ProductCategory::class, 'product_product_category', 'product_id', 'category_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductCategory
 * @package App\Models
 * @version June 25, 2021, 4:54 am UTC
 *
 * @property string $name
 * @property integer $order
 * @property string $comment
 * @property string $url
 * @property string $meta_title
 * @property string $meta_description
 * @property boolean $is_show_on_menu
 * @property boolean $is_show_mobile_menu
 * @property integer $opengraph_image_id
 */
class ProductCategory extends Model
{

    public $timestamps = false;

    public $table = 'product_category';
    
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'order',
        'comment',
        'url',
        'meta_title',
        'meta_description',
        'is_show_on_menu',
        'is_show_mobile_menu',
        'opengraph_image_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'order' => 'integer',
        'comment' => 'string',
        'url' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'is_show_on_menu' => 'boolean',
        'is_show_mobile_menu' => 'boolean',
        'opengraph_image_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|array',
        'order' => 'nullable',
        'comment' => 'required',
        'url' => 'nullable|string|max:255',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'is_show_on_menu' => 'required|boolean',
        'is_show_mobile_menu' => 'required|boolean',
        'opengraph_image_id' => 'nullable|integer'
    ];

    
}

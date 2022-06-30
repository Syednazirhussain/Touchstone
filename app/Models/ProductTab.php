<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductTab
 * @package App\Models
 * @version June 25, 2021, 4:56 am UTC
 *
 * @property integer $product_id
 * @property string $title
 * @property string $body
 * @property boolean $order
 */
class ProductTab extends Model
{


    public $table = 'product_tab';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'title',
        'body',
        'order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'title' => 'string',
        'body' => 'string',
        'order' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|array',
        'body' => 'required|array',
        'order' => 'nullable|boolean'
    ];

    public function product () {

        return $this->belongsTo(\App\Models\Product::class);
    }

    
}

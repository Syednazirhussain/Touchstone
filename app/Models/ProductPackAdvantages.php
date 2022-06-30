<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductPackAdvantages
 * @package App\Models
 * @version June 25, 2021, 4:55 am UTC
 *
 * @property integer $product_id
 * @property string $text
 * @property boolean $type
 * @property integer $order
 */
class ProductPackAdvantages extends Model
{


    public $table = 'product_pack_advantages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'text',
        'type',
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
        'text' => 'string',
        'type' => 'boolean',
        'order' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required|integer',
        'text' => 'required|array',
        'type' => 'nullable|boolean',
        'order' => 'nullable|integer'
    ];

    
    public function product () {

        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    
}

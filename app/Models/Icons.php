<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Icons
 * @package App\Models
 * @version June 25, 2021, 4:49 am UTC
 *
 * @property integer $product_id
 * @property string $text
 * @property integer $order
 */
class Icons extends Model
{


    public $table = 'icons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'text',
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
        'order' => 'nullable|integer'
    ];

    public function product () {

        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
    
}

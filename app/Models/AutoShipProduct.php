<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class AutoShipProduct
 * @package App\Models
 * @version June 25, 2021, 4:40 am UTC
 *
 * @property integer $autoship_id
 * @property integer $product_id
 * @property integer $count
 */
class AutoShipProduct extends Model
{


    public $table = 'autoship_product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'autoship_id',
        'product_id',
        'count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'autoship_id' => 'integer',
        'product_id' => 'integer',
        'count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'autoship_id' => 'nullable|integer',
        'product_id' => 'nullable|integer',
        'count' => 'nullable|integer'
    ];

    
}

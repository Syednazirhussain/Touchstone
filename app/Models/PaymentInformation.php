<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class PaymentInformation
 * @package App\Models
 * @version June 25, 2021, 4:52 am UTC
 *
 * @property string $name
 * @property string $code
 * @property boolean $show_for_hemp
 * @property string $icon
 * @property integer $order
 */
class PaymentInformation extends Model
{
    public $timestamps = false;

    public $table = 'payment_information';
    
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'code',
        'show_for_hemp',
        'icon',
        'order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'show_for_hemp' => 'boolean',
        'icon' => 'string',
        'order' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        // 'code' => 'nullable|string|max:255',
        // 'show_for_hemp' => 'required|boolean',
        // 'icon' => 'nullable|string|max:255',
        'order' => 'nullable|integer'
    ];

    
}

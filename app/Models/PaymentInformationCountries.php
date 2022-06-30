<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class PaymentInformationCountries
 * @package App\Models
 * @version June 25, 2021, 4:53 am UTC
 *
 * @property integer $country_id
 * @property integer $payment_information_id
 * @property boolean $can_hemp
 */
class PaymentInformationCountries extends Model
{


    public $table = 'payment_information_countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'country_id',
        'payment_information_id',
        'can_hemp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'payment_information_id' => 'integer',
        'can_hemp' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country_id' => 'required|integer',
        'payment_information_id' => 'required|integer',
        'can_hemp' => 'nullable|boolean'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Settings
 * @package App\Models
 * @version June 25, 2021, 4:57 am UTC
 *
 * @property string $terms
 * @property string $phone_us
 * @property string $phone_uk
 * @property string $phone_eu
 * @property string $email
 * @property string $hours
 * @property string $checkout_html_text
 * @property integer $opengraph_image_id
 */
class Settings extends Model
{


    public $table = 'settings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'terms',
        'phone_us',
        'phone_uk',
        'phone_eu',
        'email',
        'hours',
        'checkout_html_text',
        'opengraph_image_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'terms' => 'string',
        'phone_us' => 'string',
        'phone_uk' => 'string',
        'phone_eu' => 'string',
        'email' => 'string',
        'hours' => 'string',
        'checkout_html_text' => 'string',
        'opengraph_image_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'terms' => 'nullable',
        'phone_us' => 'nullable|string|max:255',
        'phone_uk' => 'nullable|string|max:255',
        'phone_eu' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'hours' => 'nullable',
        'checkout_html_text' => 'nullable',
        'opengraph_image_id' => 'nullable|integer'
    ];

    
}

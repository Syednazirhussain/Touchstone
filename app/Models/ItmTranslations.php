<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ItmTranslations
 * @package App\Models
 * @version June 25, 2021, 4:50 am UTC
 *
 * @property integer $status
 * @property string $locale
 * @property string $group
 * @property string $key
 * @property string $value
 */
class ItmTranslations extends Model
{


    public $table = 'ltm_translations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'status',
        'locale',
        'group',
        'key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'integer',
        'locale' => 'string',
        'group' => 'string',
        'key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required|integer',
        'locale' => 'required|string|max:255',
        'group' => 'required|string|max:255',
        'key' => 'required|string|max:255',
        'value' => 'nullable|string'
    ];

    
}

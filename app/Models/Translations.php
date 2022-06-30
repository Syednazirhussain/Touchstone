<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Translations
 * @package App\Models
 * @version June 25, 2021, 4:59 am UTC
 *
 * @property string $locale
 * @property string $group
 * @property string $name
 * @property string $grouped_key
 * @property string $value
 */
class Translations extends Model
{


    public $table = 'translations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $timestamps = false;

    public $fillable = [
        'locale',
        'group',
        'name',
        'grouped_key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'locale' => 'string',
        'group' => 'string',
        'name' => 'string',
        'grouped_key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'locale' => 'required|string|max:255',
        'group' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'grouped_key' => 'required|string|max:255',
        'value' => 'nullable|array'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Languages
 * @package App\Models
 * @version June 25, 2021, 4:50 am UTC
 *
 * @property string $name
 * @property string $short_name
 * @property string $locale
 * @property string $url
 * @property boolean $can_delete
 */
class Languages extends Model
{
    public $timestamps = false;

    public $table = 'languages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'short_name',
        'locale',
        'url',
        'can_delete'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'short_name' => 'string',
        'locale' => 'string',
        'url' => 'string',
        'can_delete' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'short_name' => 'nullable|string|max:255',
        'locale' => 'nullable|string|max:255',
        'url' => 'nullable|string|max:255',
        'can_delete' => 'boolean'
    ];

    
}

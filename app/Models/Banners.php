<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Banners
 * @package App\Models
 * @version June 25, 2021, 4:43 am UTC
 *
 * @property string $link
 * @property string $title
 * @property string $alt
 */
class Banners extends Model
{


    public $table = 'banners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'link',
        'title',
        'alt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'link' => 'string',
        'title' => 'string',
        'alt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'link' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'alt' => 'required|string|max:255'
    ];

    
}

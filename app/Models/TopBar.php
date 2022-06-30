<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class TopBar
 * @package App\Models
 * @version June 25, 2021, 4:59 am UTC
 *
 * @property string $bar_text
 * @property string $button_text
 * @property string $button_link
 */
class TopBar extends Model
{


    public $table = 'top_bar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'bar_text',
        'button_text',
        'button_link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bar_text' => 'string',
        'button_text' => 'string',
        'button_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bar_text' => 'required',
        'button_text' => 'required',
        'button_link' => 'required|string|max:255'
    ];

    
}

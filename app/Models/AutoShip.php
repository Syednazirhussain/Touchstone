<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class AutoShip
 * @package App\Models
 * @version June 25, 2021, 4:38 am UTC
 *
 * @property integer $user_id
 * @property string $next_process_date
 */
class AutoShip extends Model
{


    public $table = 'autoship';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'next_process_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'next_process_date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable|integer',
        'next_process_date' => 'nullable|string|max:255'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class AutoLoginHashes
 * @package App\Models
 * @version June 25, 2021, 4:42 am UTC
 *
 * @property string $hash
 */
class AutoLoginHashes extends Model
{


    public $table = 'auto_login_hashes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'hash'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hash' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hash' => 'required|string|max:255'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class PasswordResets
 * @package App\Models
 * @version June 25, 2021, 4:52 am UTC
 *
 * @property string $email
 * @property string $token
 */
class PasswordResets extends Model
{


    public $table = 'password_resets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'email',
        'token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|string|max:255',
        'token' => 'required|string|max:255'
    ];

    
}

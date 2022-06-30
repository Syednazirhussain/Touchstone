<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model as Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



/**
 * Class User
 * @package App\Models
 * @version June 25, 2021, 5:04 am UTC
 *
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    public $table = 'user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'username',  
        'password',
        'is_logged_in'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'username'  => 'string',
        'is_logged_in' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'username' => 'required'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



/**
 * Class Users
 * @package App\Models
 * @version June 25, 2021, 5:00 am UTC
 *
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $name_first
 * @property string $name_last
 * @property string $ref
 * @property integer $customer_type_id
 * @property string $tax_id
 * @property boolean $email_opt_out
 * @property integer $country_id
 * @property boolean $is_admin
 * @property string $phone
 * @property string $is_member_paid
 * @property string $ontraport_id
 * @property string $locale
 * @property string $website_alias
 * @property boolean $is_subscribed_ontraport
 * @property integer $country_residence
 * @property boolean $upgrade_eligible
 * @property string $google_id
 * @property boolean $is_password_changed
 */
class Users extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'email',
        'password',
        'remember_token',
        'name_first',
        'name_last',
        'ref',
        'customer_type_id',
        'tax_id',
        'email_opt_out',
        'country_id',
        'is_admin',
        'phone',
        'is_member_paid',
        'ontraport_id',
        'locale',
        'website_alias',
        'is_subscribed_ontraport',
        'country_residence',
        'upgrade_eligible',
        'google_id',
        'is_password_changed'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'name_first' => 'string',
        'name_last' => 'string',
        'ref' => 'string',
        'customer_type_id' => 'integer',
        'tax_id' => 'string',
        'email_opt_out' => 'boolean',
        'country_id' => 'integer',
        'is_admin' => 'boolean',
        'phone' => 'string',
        'is_member_paid' => 'string',
        'ontraport_id' => 'string',
        'locale' => 'string',
        'website_alias' => 'string',
        'is_subscribed_ontraport' => 'boolean',
        'country_residence' => 'integer',
        'upgrade_eligible' => 'boolean',
        'google_id' => 'string',
        'is_password_changed' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|string|max:255',
        'name_first' => 'nullable|string|max:255',
        'name_last' => 'nullable|string|max:255',
        'ref' => 'nullable|string|max:255',
        'is_admin' => 'required|boolean',
        'country_id' => 'nullable|integer',
        'customer_type_id' => 'required|integer',
        // 'password' => 'nullable|string|max:255',
        // 'remember_token' => 'nullable|string|max:100',
        // 'tax_id' => 'nullable|string|max:255',
        // 'email_opt_out' => 'required|boolean',
        // 'phone' => 'nullable|string|max:255',
        // 'is_member_paid' => 'required|string|max:255',
        // 'ontraport_id' => 'required|string|max:255',
        // 'locale' => 'nullable|string|max:7',
        // 'website_alias' => 'nullable|string|max:255',
        // 'is_subscribed_ontraport' => 'nullable|boolean',
        // 'country_residence' => 'nullable|integer',
        // 'upgrade_eligible' => 'required|boolean',
        // 'google_id' => 'nullable|string|max:255',
        // 'is_password_changed' => 'required|boolean'
    ];

    
    public function country() 
    {
        return $this->hasOne(\App\Models\Countries::class, 'id', 'country_id');
    }

}

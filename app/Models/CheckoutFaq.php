<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class CheckoutFaq
 * @package App\Models
 * @version June 25, 2021, 4:46 am UTC
 *
 * @property string $question
 * @property string $answer
 * @property integer $order
 */
class CheckoutFaq extends Model
{
    public $timestamps = false;

    public $table = 'checkout_faq';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'question',
        'answer',
        'order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        'answer' => 'string',
        'order' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question' => 'required|array',
        'answer' => 'required|array',
        'order' => 'required|integer'
    ];

    
}

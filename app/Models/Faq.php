<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Faq
 * @package App\Models
 * @version June 25, 2021, 4:48 am UTC
 *
 * @property integer $product_id
 * @property string $question
 * @property string $answer
 * @property integer $order
 */
class Faq extends Model
{

    public $table = 'faq';
    
    public $timestamps = false;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
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
        'product_id' => 'integer',
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
        'product_id' => 'nullable|integer',
        'question' => 'required|array',
        'answer' => 'required|array',
        'order' => 'nullable|integer'
    ];

    public function product () {

        return $this->belongsTo(\App\Models\Product::class);
    }


}

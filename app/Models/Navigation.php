<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Navigation
 * @package App\Models
 * @version June 25, 2021, 4:51 am UTC
 *
 * @property integer $is_parent
 * @property integer $parent_id
 * @property string $name
 * @property string $link
 * @property string $slug
 * @property integer $sortOrder
 */
class Navigation extends Model
{


    public $table = 'navigation';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'is_parent',
        'parent_id',
        'name',
        'link',
        'slug',
        'sortOrder'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_parent' => 'integer',
        'parent_id' => 'integer',
        'name' => 'string',
        'link' => 'string',
        'slug' => 'string',
        'sortOrder' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'is_parent' => 'nullable|integer',
        'parent_id' => 'required|integer',
        'name' => 'nullable|string|max:255',
        'link' => 'nullable|string',
        'slug' => 'nullable|string|max:255',
        'sortOrder' => 'integer'
    ];

    
    public function children() {
        
        return $this->hasMany(\App\Models\Navigation::class, 'parent_id', 'id' );
    }

    public function parent() {
        
        return $this->hasOne(\App\Models\Navigation::class, 'id', 'parent_id' );
    }



}

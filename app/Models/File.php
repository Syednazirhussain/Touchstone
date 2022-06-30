<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class File
 * @package App\Models
 * @version June 25, 2021, 4:48 am UTC
 *
 * @property string $origin_name
 * @property string $link_name
 * @property string $folder
 * @property string $title
 * @property string $alt
 * @property string $subject
 * @property integer $subject_id
 * @property integer $user_id
 * @property string $type
 * @property integer $order
 * @property boolean $is_video
 * @property string $video_script
 */
class File extends Model
{


    public $table = 'file';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'alt',
        'is_video',
        'order',
        'origin_name',
        'link_name',
        'folder',
        'subject',
        'subject_id',
        'user_id',
        'type',
        'video_script'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'origin_name' => 'string',
        'link_name' => 'string',
        'folder' => 'string',
        'title' => 'string',
        'alt' => 'string',
        'subject' => 'string',
        'subject_id' => 'integer',
        'user_id' => 'integer',
        'type' => 'string',
        'order' => 'integer',
        'is_video' => 'boolean',
        'video_script' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'nullable|string|max:255',
        'is_video' => 'required|boolean',
        // 'file' => 'file',
        'order' => 'nullable|integer',
        'alt_en' => 'required',
        'alt_pl' => 'required',
        'alt_ja' => 'required',
        'alt_es' => 'required',
        'alt_th' => 'required',
        // 'origin_name' => 'nullable|string|max:255',
        // 'link_name' => 'nullable|string|max:255',
        // 'folder' => 'nullable|string|max:255',
        // 'subject' => 'nullable|string|max:255',
        // 'subject_id' => 'nullable|integer',
        // 'user_id' => 'nullable|integer',
        // 'type' => 'required|string|max:255',
        // 'video_script' => 'nullable|string'
    ];

    public function product () {

        return $this->belongsTo(\App\Models\Product::class, 'subject_id');
    }

    public function banner () {

        return $this->belongsTo(\App\Models\Banners::class, 'subject_id');
    }


}

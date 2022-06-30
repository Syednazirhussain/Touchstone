<?php

namespace App\Repositories;

use App\Models\Settings;
// use App\Repositories\BaseRepository;

/**
 * Class SettingsRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:57 am UTC
*/

class SettingsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'terms',
        'phone_us',
        'phone_uk',
        'phone_eu',
        'email',
        'hours',
        'checkout_html_text',
        'opengraph_image_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Settings::class;
    }

    public function edit ($id, $type = 'terms') {

        $setting = Settings::where('id', $id)->first();

        // if ($type == 'terms') {

        //     $setting = $setting->select($type);
        // }

        // $setting = $setting->first();

        if (empty($setting)) {

            return [];
        }

        return $setting->toArray();

        // if ($type == 'terms') {
            
        //     $setting[$type] = json_decode($setting[$type], 1);
        // }

        // return $setting;
    }

    public function update ($id, $data = []) {

        if (!array_key_exists('type', $data)) {

            return [ 'error' => 1, 'message' => 'Type not defined'];
        }

        unset($data["type"]);
        unset($data["created_at"]);
        unset($data["updated_at"]);

        $setting = Settings::where('id', $id)->first();

        if (!empty($setting)) {

            if (is_array($data["terms"])) {

                $data["terms"] = json_encode($data["terms"]);
            }

            Settings::where('id', $id)->update($data);

            return [ 'error' => 0, 'message'  => 'Settings updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Settings not updated successfully.' ];
    }


}

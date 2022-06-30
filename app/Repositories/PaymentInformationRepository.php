<?php

namespace App\Repositories;

use App\Models\PaymentInformation;
// use App\Repositories\BaseRepository;

/**
 * Class PaymentInformationRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:52 am UTC
*/

class PaymentInformationRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'show_for_hemp',
        'icon',
        'order'
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
        return PaymentInformation::class;
    }

    public function index () {

        $paymentInformation = PaymentInformation::select('id', 'name', 'icon', 'order')->paginate(10);
        if ($paymentInformation->total() == 0) {

            return [];
        }

        return $paymentInformation->toArray();
    }

    public function edit ($id) {

        $paymentInformation = PaymentInformation::where('id', $id)->first();
        if (empty($paymentInformation)) {

            return [];
        }

        return $paymentInformation->toArray();
    }

    public function store ($data = []) {

        // $paymentInformation = PaymentInformation::firstOrNew($data);

        $payment_information_id = PaymentInformation::select('id')->max('id');

        $paymentInformation = new PaymentInformation;
        $paymentInformation->id = ($payment_information_id + 1);
        $paymentInformation->name = $data['name'];
        $paymentInformation->order = $data['order'];
        if ($paymentInformation->save()) {

            $paymentInformation->save();
            return [ 'error' => 0, 'message'  => 'Payment Information saved successfully.' ]; 
        }

        return [  'error' => 1, 'message'  => 'Payment Information not saved successfully.' ];
    }

    public function update ($id, $data = []) {

        $paymentInformation = PaymentInformation::where('id', $id)->first();
        if (!empty($paymentInformation)) {

            $paymentInformation->update($data);
            return [ 'error' => 0, 'message'  => 'Payment Information updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Payment Information not updated successfully.' ];
    }

    public function destroy ($id) {

        $paymentInformation = PaymentInformation::where('id', $id)->first();
        if (!empty($paymentInformation)) {

            $paymentInformation->delete();
            return [ 'error' => 0, 'message'  => 'Payment Information deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Payment Information not deleted successfully.' ];
    }

}

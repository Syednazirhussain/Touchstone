<?php

namespace App\Repositories;

use App\Models\CheckoutFaq;
// use App\Repositories\BaseRepository;

/**
 * Class CheckoutFaqRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:46 am UTC
*/

class CheckoutFaqRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'answer',
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
        return CheckoutFaq::class;
    }

    public function index () {

        $checkoutFaq = CheckoutFaq::select('id', 'question', 'answer', 'order')->paginate(10);
        if ($checkoutFaq->total() == 0) {

            return [];
        }

        return $checkoutFaq->toArray();
    }

    public function show ($id) {

        $checkoutFaq = CheckoutFaq::select('id', 'question', 'answer')
                            ->where('id', $id)
                            ->first();

        if (empty($checkoutFaq)) {

            return [];
        }

        return $checkoutFaq->toArray();
    }

    public function edit ($id) {

        $checkoutFaq = CheckoutFaq::where('id', $id)->first();
        if (empty($checkoutFaq)) {

            return [];
        }

        return $checkoutFaq->toArray();
    }

    public function update ($id, $data = []) {

        $checkoutFaq = CheckoutFaq::where('id', $id)->first();
        if (!empty($checkoutFaq)) {

            if (is_array($data["answer"])) {

                $data["answer"] = json_encode($data["answer"]);
            }

            if (is_array($data["question"])) {

                $data["question"] = json_encode($data["question"]);
            }

            $checkoutFaq->update($data);
            return [ 'error' => 0, 'message'  => 'Checkout faq updated successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Checkout faq not updated.' ];
    }

    public function destroy ($id) {

        $checkoutFaq = CheckoutFaq::where('id', $id)->first();
        if (!empty($checkoutFaq)) {

            $checkoutFaq->delete();
            return [ 'error' => 0, 'message'  => 'Checkout faq deleted successfully.' ]; 
        }

        return [ 'error' => 1, 'message'  => 'Checkout faq not deleted.' ];
    }

}

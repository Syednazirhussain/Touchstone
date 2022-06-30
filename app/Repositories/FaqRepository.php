<?php

namespace App\Repositories;

use DB;
use App\Models\Faq;

/**
 * Class FaqRepository
 * @package App\Repositories
 * @version June 25, 2021, 4:48 am UTC
*/

class FaqRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
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
        return Faq::class;
    }

    public function index ($product_id) {

        $faqs = Faq::where('product_id', $product_id)
                    ->with([
                        'product' => function ($q) {

                            return $q->select('id', 'title');
                        }
                    ])
                    ->paginate(10);

        return $faqs->toArray();
    }

    public function show ($product_id, $id) {

        $faq = Faq::where('id', $id)
                        ->where('product_id', $product_id)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($faq)) {

            return [];
        }

        return $faq->toArray();
    }

    public function store ($product_id, $data = []) {

        try {

            DB::beginTransaction();

            $faq_id = Faq::select('id')->max('id');

            $faq = new Faq;            
            $faq->id = ($faq_id + 1);
            $faq->product_id    = $product_id;
            $faq->order         = $data['order'];
            $faq->answer        = json_encode($data['answer']);
            $faq->question      = json_encode($data['question']);
            if ($faq->save()) {
                
                DB::commit();
                return [ 'error' => 0, 'message'  => 'Faq saved successfully.' ]; 
            }

            return [ 'error' => 1, 'message'  => 'Faq not saved.' ];

        } catch (Exception $ex) {

            DB::rollback();
            return [ 'error' => 1, 'message'  => $ex->getMessage() ];
        }
    }

    public function edit ($product_id, $id) {

        $faq = Faq::where('id', $id)
                        ->where('product_id', $product_id)
                        ->with([
                            'product' => function ($q) {

                                return $q->select('id', 'title');
                            }
                        ])
                        ->first();

        if (empty($faq)) {

            return [];
        }

        return $faq->toArray();
    }

    public function update ($product_id, $id, $data = []) {

        $id = $data["id"];
        $product_id = $data["product_id"];

        unset($data["id"]);
        unset($data["product"]);
        unset($data["product_id"]);

        $faq = Faq::where('id', $id)
                    ->where('product_id', $product_id)
                    ->update($data);

        if ($faq) {

            return [ 'error' => 0, 'message' => 'Faq updated successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Faq not updated' ];
    }

    public function destroy ($product_id, $id) {

        $faq = Faq::where('id', $id)
                    ->where('product_id', $product_id)
                    ->delete();

        if ($faq) {

            return [ 'error' => 0, 'message' => 'Faq deleted successfully' ];
        }

        return [ 'error' => 1, 'message' => 'Faq not deleted' ];
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Repositories\FaqRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaqController extends Controller
{
    /** @var  FaqRepository */
    private $faqRepository;

    public function __construct(FaqRepository $faqRepo)
    {
        $this->faqRepository = $faqRepo;
    }

    /**
     * Display a listing of the Faq.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $faqs = $this->faqRepository->index($product_id);
        return response([ 'payload' => $faqs ], 200);
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param CreateFaqRequest $request
     *
     * @return Response
     */
    public function store($product_id, CreateFaqRequest $request)
    {
        $response = $this->faqRepository->store($product_id, $request->all());
        return response($response, 200);
    }

    /**
     * Display the specified Faq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $faq = $this->faqRepository->show($product_id, $id);
        return response([ 'payload' => $faq ], 200);
    }

    /**
     * Show the form for editing the specified Faq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $faq = $this->faqRepository->edit($product_id, $id);
        return response([ 'payload' => $faq ], 200);
    }

    /**
     * Update the specified Faq in storage.
     *
     * @param int $id
     * @param UpdateFaqRequest $request
     *
     * @return Response
     */
    public function update($product_id, $id, UpdateFaqRequest $request)
    {
        $response = $this->faqRepository->update($product_id, $id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified Faq from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {
        $response = $this->faqRepository->destroy($product_id, $id);
        return response($response, 200);
    }
}

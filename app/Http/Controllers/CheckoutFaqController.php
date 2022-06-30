<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCheckoutFaqRequest;
use App\Http\Requests\UpdateCheckoutFaqRequest;
use App\Repositories\CheckoutFaqRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class CheckoutFaqController extends Controller
{
    /** @var  CheckoutFaqRepository */
    private $checkoutFaqRepository;

    public function __construct(CheckoutFaqRepository $checkoutFaqRepo)
    {
        $this->checkoutFaqRepository = $checkoutFaqRepo;
    }

    /**
     * Display a listing of the CheckoutFaq.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $checkoutFaqs = $this->checkoutFaqRepository->index();
        return response([ 'payload' => $checkoutFaqs ], 200);
    }

    /**
     * Show the form for creating a new CheckoutFaq.
     *
     * @return Response
     */
    public function create()
    {
        return view('checkout_faqs.create');
    }

    /**
     * Store a newly created CheckoutFaq in storage.
     *
     * @param CreateCheckoutFaqRequest $request
     *
     * @return Response
     */
    public function store(CreateCheckoutFaqRequest $request)
    {
        $input = $request->all();

        $checkoutFaq = $this->checkoutFaqRepository->create($input);

        Flash::success('Checkout Faq saved successfully.');

        return redirect(route('checkoutFaqs.index'));
    }

    /**
     * Display the specified CheckoutFaq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $checkoutFaq = $this->checkoutFaqRepository->show($id);
        return response([ 'payload' => $checkoutFaq ], 200);
    }

    /**
     * Show the form for editing the specified CheckoutFaq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $checkoutFaq = $this->checkoutFaqRepository->edit($id);
        return response([ 'payload' => $checkoutFaq ], 200);
    }

    /**
     * Update the specified CheckoutFaq in storage.
     *
     * @param int $id
     * @param UpdateCheckoutFaqRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCheckoutFaqRequest $request)
    {
        $response = $this->checkoutFaqRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified CheckoutFaq from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->checkoutFaqRepository->destroy($id);
        return response($response, 200);
    }
}

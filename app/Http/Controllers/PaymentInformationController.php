<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentInformationRequest;
use App\Http\Requests\UpdatePaymentInformationRequest;
use App\Repositories\PaymentInformationRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class PaymentInformationController extends Controller
{
    /** @var  PaymentInformationRepository */
    private $paymentInformationRepository;

    public function __construct(PaymentInformationRepository $paymentInformationRepo)
    {
        $this->paymentInformationRepository = $paymentInformationRepo;
    }

    /**
     * Display a listing of the PaymentInformation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $paymentInformations = $this->paymentInformationRepository->index();
        return response([ 'payload' => $paymentInformations], 200);
    }

    /**
     * Store a newly created PaymentInformation in storage.
     *
     * @param CreatePaymentInformationRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentInformationRequest $request)
    {
        $response = $this->paymentInformationRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Show the form for editing the specified PaymentInformation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentInformation = $this->paymentInformationRepository->edit($id);
        return response([ 'payload' => $paymentInformation], 200);
    }

    /**
     * Update the specified PaymentInformation in storage.
     *
     * @param int $id
     * @param UpdatePaymentInformationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentInformationRequest $request)
    {
        $response = $this->paymentInformationRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified PaymentInformation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->paymentInformationRepository->destroy($id);
        return response($response, 200);
    }
}

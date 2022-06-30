<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentInformationCountriesRequest;
use App\Http\Requests\UpdatePaymentInformationCountriesRequest;
use App\Repositories\PaymentInformationCountriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PaymentInformationCountriesController extends AppBaseController
{
    /** @var  PaymentInformationCountriesRepository */
    private $paymentInformationCountriesRepository;

    public function __construct(PaymentInformationCountriesRepository $paymentInformationCountriesRepo)
    {
        $this->paymentInformationCountriesRepository = $paymentInformationCountriesRepo;
    }

    /**
     * Display a listing of the PaymentInformationCountries.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $paymentInformationCountries = $this->paymentInformationCountriesRepository->all();

        return view('payment_information_countries.index')
            ->with('paymentInformationCountries', $paymentInformationCountries);
    }

    /**
     * Show the form for creating a new PaymentInformationCountries.
     *
     * @return Response
     */
    public function create()
    {
        return view('payment_information_countries.create');
    }

    /**
     * Store a newly created PaymentInformationCountries in storage.
     *
     * @param CreatePaymentInformationCountriesRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentInformationCountriesRequest $request)
    {
        $input = $request->all();

        $paymentInformationCountries = $this->paymentInformationCountriesRepository->create($input);

        Flash::success('Payment Information Countries saved successfully.');

        return redirect(route('paymentInformationCountries.index'));
    }

    /**
     * Display the specified PaymentInformationCountries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paymentInformationCountries = $this->paymentInformationCountriesRepository->find($id);

        if (empty($paymentInformationCountries)) {
            Flash::error('Payment Information Countries not found');

            return redirect(route('paymentInformationCountries.index'));
        }

        return view('payment_information_countries.show')->with('paymentInformationCountries', $paymentInformationCountries);
    }

    /**
     * Show the form for editing the specified PaymentInformationCountries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentInformationCountries = $this->paymentInformationCountriesRepository->find($id);

        if (empty($paymentInformationCountries)) {
            Flash::error('Payment Information Countries not found');

            return redirect(route('paymentInformationCountries.index'));
        }

        return view('payment_information_countries.edit')->with('paymentInformationCountries', $paymentInformationCountries);
    }

    /**
     * Update the specified PaymentInformationCountries in storage.
     *
     * @param int $id
     * @param UpdatePaymentInformationCountriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentInformationCountriesRequest $request)
    {
        $paymentInformationCountries = $this->paymentInformationCountriesRepository->find($id);

        if (empty($paymentInformationCountries)) {
            Flash::error('Payment Information Countries not found');

            return redirect(route('paymentInformationCountries.index'));
        }

        $paymentInformationCountries = $this->paymentInformationCountriesRepository->update($request->all(), $id);

        Flash::success('Payment Information Countries updated successfully.');

        return redirect(route('paymentInformationCountries.index'));
    }

    /**
     * Remove the specified PaymentInformationCountries from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentInformationCountries = $this->paymentInformationCountriesRepository->find($id);

        if (empty($paymentInformationCountries)) {
            Flash::error('Payment Information Countries not found');

            return redirect(route('paymentInformationCountries.index'));
        }

        $this->paymentInformationCountriesRepository->delete($id);

        Flash::success('Payment Information Countries deleted successfully.');

        return redirect(route('paymentInformationCountries.index'));
    }
}

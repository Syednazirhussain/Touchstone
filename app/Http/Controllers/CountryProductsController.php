<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountryProductsRequest;
use App\Http\Requests\UpdateCountryProductsRequest;
use App\Repositories\CountryProductsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CountryProductsController extends AppBaseController
{
    /** @var  CountryProductsRepository */
    private $countryProductsRepository;

    public function __construct(CountryProductsRepository $countryProductsRepo)
    {
        $this->countryProductsRepository = $countryProductsRepo;
    }

    /**
     * Display a listing of the CountryProducts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $countryProducts = $this->countryProductsRepository->all();

        return view('country_products.index')
            ->with('countryProducts', $countryProducts);
    }

    /**
     * Show the form for creating a new CountryProducts.
     *
     * @return Response
     */
    public function create()
    {
        return view('country_products.create');
    }

    /**
     * Store a newly created CountryProducts in storage.
     *
     * @param CreateCountryProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateCountryProductsRequest $request)
    {
        $input = $request->all();

        $countryProducts = $this->countryProductsRepository->create($input);

        Flash::success('Country Products saved successfully.');

        return redirect(route('countryProducts.index'));
    }

    /**
     * Display the specified CountryProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $countryProducts = $this->countryProductsRepository->find($id);

        if (empty($countryProducts)) {
            Flash::error('Country Products not found');

            return redirect(route('countryProducts.index'));
        }

        return view('country_products.show')->with('countryProducts', $countryProducts);
    }

    /**
     * Show the form for editing the specified CountryProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $countryProducts = $this->countryProductsRepository->find($id);

        if (empty($countryProducts)) {
            Flash::error('Country Products not found');

            return redirect(route('countryProducts.index'));
        }

        return view('country_products.edit')->with('countryProducts', $countryProducts);
    }

    /**
     * Update the specified CountryProducts in storage.
     *
     * @param int $id
     * @param UpdateCountryProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountryProductsRequest $request)
    {
        $countryProducts = $this->countryProductsRepository->find($id);

        if (empty($countryProducts)) {
            Flash::error('Country Products not found');

            return redirect(route('countryProducts.index'));
        }

        $countryProducts = $this->countryProductsRepository->update($request->all(), $id);

        Flash::success('Country Products updated successfully.');

        return redirect(route('countryProducts.index'));
    }

    /**
     * Remove the specified CountryProducts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $countryProducts = $this->countryProductsRepository->find($id);

        if (empty($countryProducts)) {
            Flash::error('Country Products not found');

            return redirect(route('countryProducts.index'));
        }

        $this->countryProductsRepository->delete($id);

        Flash::success('Country Products deleted successfully.');

        return redirect(route('countryProducts.index'));
    }
}

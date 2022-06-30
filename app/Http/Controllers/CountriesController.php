<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountriesRequest;
use App\Http\Requests\UpdateCountriesRequest;
use App\Repositories\CountriesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class CountriesController extends Controller
{
    /** @var  CountriesRepository */
    private $countriesRepository;

    public function __construct(CountriesRepository $countriesRepo)
    {
        $this->countriesRepository = $countriesRepo;
    }

    /**
     * Display a listing of the Countries.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $countries = $this->countriesRepository->index();
        return response([ 'payload' => $countries], 200);
    }

    /**
     * Show the form for creating a new Countries.
     *
     * @return Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created Countries in storage.
     *
     * @param CreateCountriesRequest $request
     *
     * @return Response
     */
    public function store(CreateCountriesRequest $request)
    {
        $response = $this->countriesRepository->store($request->all());
        return response($response, 200);
    }

    /**
     * Display the specified Countries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $country = $this->countriesRepository->show($id);
        return response([ 'payload' => $country ], 200);
    }

    /**
     * Show the form for editing the specified Countries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $country = $this->countriesRepository->edit($id);
        return response([ 'payload' => $country ], 200);
    }

    /**
     * Update the specified Countries in storage.
     *
     * @param int $id
     * @param UpdateCountriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountriesRequest $request)
    {
        $response = $this->countriesRepository->update($id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified Countries from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->countriesRepository->destroy($id);
        return response($response, 200);
    }
}

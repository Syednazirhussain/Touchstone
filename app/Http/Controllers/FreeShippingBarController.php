<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFreeShippingBarRequest;
use App\Http\Requests\UpdateFreeShippingBarRequest;
use App\Repositories\FreeShippingBarRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class FreeShippingBarController extends Controller
{
    /** @var  FreeShippingBarRepository */
    private $freeShippingBarRepository;

    public function __construct(FreeShippingBarRepository $freeShippingBarRepo)
    {
        $this->freeShippingBarRepository = $freeShippingBarRepo;
    }

    /**
     * Display a listing of the FreeShippingBar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $freeShippingBars = $this->freeShippingBarRepository->index();
        return response([ 'payload' => $freeShippingBars ], 200);
    }

    /**
     * Create a FreeShippingBar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create()
    {
        $payload = $this->freeShippingBarRepository->create();
        return response([ 'payload' => $payload ], 200);
    }

    /**
     * Store a newly created FreeShippingBar in storage.
     *
     * @param CreateFreeShippingBarRequest $request
     *
     * @return Response
     */
    public function store(CreateFreeShippingBarRequest $request)
    {
        $response = $this->freeShippingBarRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Display the specified FreeShippingBar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $freeShippingBar = $this->freeShippingBarRepository->show($id);
        return response([ 'payload' => $freeShippingBar ], 200);
    }

    /**
     * Show the form for editing the specified FreeShippingBar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $freeShippingBar = $this->freeShippingBarRepository->edit($id);
        return response([ 'payload' => $freeShippingBar ], 200);
    }

    /**
     * Update the specified FreeShippingBar in storage.
     *
     * @param int $id
     * @param UpdateFreeShippingBarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFreeShippingBarRequest $request)
    {
        $response = $this->freeShippingBarRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified FreeShippingBar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->freeShippingBarRepository->destroy($id);
        return response($response, 200);
    }
}

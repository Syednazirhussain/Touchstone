<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuyNowRequest;
use App\Http\Requests\UpdateBuyNowRequest;
use App\Repositories\BuyNowRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class BuyNowController extends Controller
{
    /** @var  BuyNowRepository */
    private $buyNowRepository;

    public function __construct(BuyNowRepository $buyNowRepo)
    {
        $this->buyNowRepository = $buyNowRepo;
    }

    /**
     * Display a listing of the BuyNow.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $buyNows = $this->buyNowRepository->index();
        return response([ 'payload' => $buyNows ], 200);
    }

    /**
     * Show the form for creating a new BuyNow.
     *
     * @return Response
     */
    public function create()
    {
        $products = $this->buyNowRepository->create();
        return response([ 'payload' => $products ], 200);
    }

    /**
     * Store a newly created BuyNow in storage.
     *
     * @param CreateBuyNowRequest $request
     *
     * @return Response
     */
    public function store(CreateBuyNowRequest $request)
    {
        $response = $this->buyNowRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Show the form for editing the specified BuyNow.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buyNow = $this->buyNowRepository->edit($id);
        return response([ 'payload' => $buyNow ], 200);
    }

    /**
     * Update the specified BuyNow in storage.
     *
     * @param int $id
     * @param UpdateBuyNowRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuyNowRequest $request)
    {
        $response = $this->buyNowRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified BuyNow from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->buyNowRepository->destroy($id);
        return response($response, 200);
    }
}

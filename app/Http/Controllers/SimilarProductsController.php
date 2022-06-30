<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSimilarProductsRequest;
use App\Http\Requests\UpdateSimilarProductsRequest;
use App\Repositories\SimilarProductsRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class SimilarProductsController extends Controller
{
    /** @var  SimilarProductsRepository */
    private $similarProductsRepository;

    public function __construct(SimilarProductsRepository $similarProductsRepo)
    {
        $this->similarProductsRepository = $similarProductsRepo;
    }

    /**
     * Display a listing of the SimilarProducts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $similarProducts = $this->similarProductsRepository->index($product_id);
        return response([ 'payload' => $similarProducts ], 200);
    }

    /**
     * Show the form for creating a new SimilarProducts.
     *
     * @return Response
     */
    public function create()
    {
        $products = $this->similarProductsRepository->create();
        return response([ 'payload' => $products ], 200);
    }

    /**
     * Store a newly created SimilarProducts in storage.
     *
     * @param CreateSimilarProductsRequest $request
     *
     * @return Response
     */
    public function store($product_id, CreateSimilarProductsRequest $request)
    {
        $response = $this->similarProductsRepository->store($product_id, $request->all());
        return response($response, 200);
    }

    /**
     * Display the specified SimilarProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $similarProduct = $this->similarProductsRepository->show($product_id, $id);
        return response([ 'payload' => $similarProduct ], 200);
    }

    /**
     * Show the form for editing the specified SimilarProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $similarProduct = $this->similarProductsRepository->edit($product_id, $id);
        return response([ 'payload' => $similarProduct ], 200);
    }

    /**
     * Update the specified SimilarProducts in storage.
     *
     * @param int $id
     * @param UpdateSimilarProductsRequest $request
     *
     * @return Response
     */
    public function update($product_id, $id, UpdateSimilarProductsRequest $request)
    {
        $response = $this->similarProductsRepository->update($product_id, $id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified SimilarProducts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {
        $response = $this->similarProductsRepository->destroy($product_id, $id);
        return response($response, 200);
    }
}

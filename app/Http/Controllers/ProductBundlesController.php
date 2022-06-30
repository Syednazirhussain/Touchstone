<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductBundlesRequest;
use App\Http\Requests\UpdateProductBundlesRequest;
use App\Repositories\ProductBundlesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductBundlesController extends Controller
{
    /** @var  ProductBundlesRepository */
    private $productBundlesRepository;

    public function __construct(ProductBundlesRepository $productBundlesRepo)
    {
        $this->productBundlesRepository = $productBundlesRepo;
    }

    /**
     * Display a listing of the ProductBundles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $bundles = $this->productBundlesRepository->index($product_id);
        return response([ 'payload' => $bundles ], 200);
    }

    /**
     * Store a newly created ProductBundles in storage.
     *
     * @param CreateProductBundlesRequest $request
     *
     * @return Response
     */
    public function store($product_id, CreateProductBundlesRequest $request)
    {
        $response = $this->productBundlesRepository->store($product_id, $request->all());
        return response($response, 200);
    }

    /**
     * Display the specified ProductBundles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $bundle = $this->productBundlesRepository->show($product_id, $id);
        return response([ 'payload' => $bundle ], 200);
    }

    /**
     * Show the form for editing the specified ProductBundles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $bundle = $this->productBundlesRepository->edit($product_id, $id);
        return response([ 'payload' => $bundle ], 200);
    }

    /**
     * Update the specified ProductBundles in storage.
     *
     * @param int $id
     * @param UpdateProductBundlesRequest $request
     *
     * @return Response
     */
    public function update($product_id, $id, UpdateProductBundlesRequest $request)
    {
        $response = $this->productBundlesRepository->update($product_id, $id, $request->all());
        return response($response, 200);
    }


    /**
     * Remove the specified ProductBundles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {
        $response = $this->productBundlesRepository->destroy($product_id, $id);
        return response($response, 200);
    }

}

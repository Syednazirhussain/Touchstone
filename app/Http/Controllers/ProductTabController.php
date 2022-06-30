<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductTabRequest;
use App\Http\Requests\UpdateProductTabRequest;
use App\Repositories\ProductTabRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductTabController extends Controller
{
    /** @var  ProductTabRepository */
    private $productTabRepository;

    public function __construct(ProductTabRepository $productTabRepo)
    {
        $this->productTabRepository = $productTabRepo;
    }

    /**
     * Display a listing of the ProductTab.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $productTabs = $this->productTabRepository->index($product_id);
        return response([ 'payload' => $productTabs ], 200);
    }

    /**
     * Show the form for creating a new ProductTab.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_tabs.create');
    }

    /**
     * Store a newly created ProductTab in storage.
     *
     * @param CreateProductTabRequest $request
     *
     * @return Response
     */
    public function store($product_id, CreateProductTabRequest $request)
    {
        $response = $this->productTabRepository->store($product_id, $request->all());
        return response($response, 200);
    }

    /**
     * Display the specified ProductTab.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $productTab = $this->productTabRepository->show($product_id, $id);
        return response([ 'payload' => $productTab ], 200);
    }

    /**
     * Show the form for editing the specified ProductTab.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $productTab = $this->productTabRepository->edit($product_id, $id);
        return response([ 'payload' => $productTab ], 200);
    }

    /**
     * Update the specified ProductTab in storage.
     *
     * @param int $id
     * @param UpdateProductTabRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductTabRequest $request)
    {
        $response = $this->productTabRepository->update($id, $request->all());
        return response($response, 200);        
    }

    /**
     * Remove the specified ProductTab from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {   
        $response = $this->productTabRepository->destroy($product_id, $id);
        return response($response, 200);
    }
}

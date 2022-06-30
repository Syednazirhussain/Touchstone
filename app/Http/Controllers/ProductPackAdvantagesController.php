<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductPackAdvantagesRequest;
use App\Http\Requests\UpdateProductPackAdvantagesRequest;
use App\Repositories\ProductPackAdvantagesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductPackAdvantagesController extends Controller
{
    /** @var  ProductPackAdvantagesRepository */
    private $productPackAdvantagesRepository;

    public function __construct(ProductPackAdvantagesRepository $productPackAdvantagesRepo)
    {
        $this->productPackAdvantagesRepository = $productPackAdvantagesRepo;
    }

    /**
     * Display a listing of the ProductPackAdvantages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $packages = $this->productPackAdvantagesRepository->index($product_id);
        return response([ 'payload' => $packages ], 200);
    }

    /**
     * Show the form for creating a new ProductPackAdvantages.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_pack_advantages.create');
    }

    /**
     * Store a newly created ProductPackAdvantages in storage.
     *
     * @param CreateProductPackAdvantagesRequest $request
     *
     * @return Response
     */
    public function store($product_id, CreateProductPackAdvantagesRequest $request)
    {
        $response = $this->productPackAdvantagesRepository->store($product_id, $request->all());
        return response($response, 200);
    }

    /**
     * Display the specified ProductPackAdvantages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $package = $this->productPackAdvantagesRepository->show($product_id, $id);
        return response([ 'payload' => $package ], 200);
    }

    /**
     * Show the form for editing the specified ProductPackAdvantages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $package = $this->productPackAdvantagesRepository->edit($product_id, $id);
        return response([ 'payload' => $package ], 200);
    }

    /**
     * Update the specified ProductPackAdvantages in storage.
     *
     * @param int $id
     * @param UpdateProductPackAdvantagesRequest $request
     *
     * @return Response
     */
    public function update($product_id, $id, UpdateProductPackAdvantagesRequest $request)
    {
        $response = $this->productPackAdvantagesRepository->update($product_id, $id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified ProductPackAdvantages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {
        $response = $this->productPackAdvantagesRepository->destroy($product_id, $id);
        return response($response, 200);
    }
    
}

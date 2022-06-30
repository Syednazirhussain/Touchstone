<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Repositories\ProductCategoryRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductCategoryController extends Controller
{
    /** @var  ProductCategoryRepository */
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepo)
    {
        $this->productCategoryRepository = $productCategoryRepo;
    }

    /**
     * Display a listing of the ProductCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productCategories = $this->productCategoryRepository->index();
        return response(['payload' => $productCategories], 200);
    }

    /**
     * Show the form for creating a new ProductCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_categories.create');
    }

    /**
     * Store a newly created ProductCategory in storage.
     *
     * @param CreateProductCategoryRequest $request
     *
     * @return Response
     */
    public function store (CreateProductCategoryRequest $request)
    {
        dd($request->all());
        $response = $this->productCategoryRepository->store($request->all());
        return response($response, 200);
    }

    /**
     * Display the specified ProductCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productCategory = $this->productCategoryRepository->show($id);
        return response(['payload' => $productCategory], 200);
    }

    /**
     * Show the form for editing the specified ProductCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productCategory = $this->productCategoryRepository->edit($id);
        return response(['payload' => $productCategory], 200);
    }

    /**
     * Update the specified ProductCategory in storage.
     *
     * @param int $id
     * @param UpdateProductCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductCategoryRequest $request)
    {
        $response = $this->productCategoryRepository->update($id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified ProductCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->productCategoryRepository->destroy($id);
        return response($response, 200);
    }
}

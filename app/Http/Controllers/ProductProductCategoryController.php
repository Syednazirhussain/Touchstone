<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductProductCategoryRequest;
use App\Http\Requests\UpdateProductProductCategoryRequest;
use App\Repositories\ProductProductCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductProductCategoryController extends AppBaseController
{
    /** @var  ProductProductCategoryRepository */
    private $productProductCategoryRepository;

    public function __construct(ProductProductCategoryRepository $productProductCategoryRepo)
    {
        $this->productProductCategoryRepository = $productProductCategoryRepo;
    }

    /**
     * Display a listing of the ProductProductCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productProductCategories = $this->productProductCategoryRepository->all();

        return view('product_product_categories.index')
            ->with('productProductCategories', $productProductCategories);
    }

    /**
     * Show the form for creating a new ProductProductCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_product_categories.create');
    }

    /**
     * Store a newly created ProductProductCategory in storage.
     *
     * @param CreateProductProductCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateProductProductCategoryRequest $request)
    {
        $input = $request->all();

        $productProductCategory = $this->productProductCategoryRepository->create($input);

        Flash::success('Product Product Category saved successfully.');

        return redirect(route('productProductCategories.index'));
    }

    /**
     * Display the specified ProductProductCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productProductCategory = $this->productProductCategoryRepository->find($id);

        if (empty($productProductCategory)) {
            Flash::error('Product Product Category not found');

            return redirect(route('productProductCategories.index'));
        }

        return view('product_product_categories.show')->with('productProductCategory', $productProductCategory);
    }

    /**
     * Show the form for editing the specified ProductProductCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productProductCategory = $this->productProductCategoryRepository->find($id);

        if (empty($productProductCategory)) {
            Flash::error('Product Product Category not found');

            return redirect(route('productProductCategories.index'));
        }

        return view('product_product_categories.edit')->with('productProductCategory', $productProductCategory);
    }

    /**
     * Update the specified ProductProductCategory in storage.
     *
     * @param int $id
     * @param UpdateProductProductCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductProductCategoryRequest $request)
    {
        $productProductCategory = $this->productProductCategoryRepository->find($id);

        if (empty($productProductCategory)) {
            Flash::error('Product Product Category not found');

            return redirect(route('productProductCategories.index'));
        }

        $productProductCategory = $this->productProductCategoryRepository->update($request->all(), $id);

        Flash::success('Product Product Category updated successfully.');

        return redirect(route('productProductCategories.index'));
    }

    /**
     * Remove the specified ProductProductCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productProductCategory = $this->productProductCategoryRepository->find($id);

        if (empty($productProductCategory)) {
            Flash::error('Product Product Category not found');

            return redirect(route('productProductCategories.index'));
        }

        $this->productProductCategoryRepository->delete($id);

        Flash::success('Product Product Category deleted successfully.');

        return redirect(route('productProductCategories.index'));
    }
}

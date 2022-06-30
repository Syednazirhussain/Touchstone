<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuyNowProductsRequest;
use App\Http\Requests\UpdateBuyNowProductsRequest;
use App\Repositories\BuyNowProductsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BuyNowProductsController extends AppBaseController
{
    /** @var  BuyNowProductsRepository */
    private $buyNowProductsRepository;

    public function __construct(BuyNowProductsRepository $buyNowProductsRepo)
    {
        $this->buyNowProductsRepository = $buyNowProductsRepo;
    }

    /**
     * Display a listing of the BuyNowProducts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $buyNowProducts = $this->buyNowProductsRepository->all();

        return view('buy_now_products.index')
            ->with('buyNowProducts', $buyNowProducts);
    }

    /**
     * Show the form for creating a new BuyNowProducts.
     *
     * @return Response
     */
    public function create()
    {
        return view('buy_now_products.create');
    }

    /**
     * Store a newly created BuyNowProducts in storage.
     *
     * @param CreateBuyNowProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateBuyNowProductsRequest $request)
    {
        $input = $request->all();

        $buyNowProducts = $this->buyNowProductsRepository->create($input);

        Flash::success('Buy Now Products saved successfully.');

        return redirect(route('buyNowProducts.index'));
    }

    /**
     * Display the specified BuyNowProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $buyNowProducts = $this->buyNowProductsRepository->find($id);

        if (empty($buyNowProducts)) {
            Flash::error('Buy Now Products not found');

            return redirect(route('buyNowProducts.index'));
        }

        return view('buy_now_products.show')->with('buyNowProducts', $buyNowProducts);
    }

    /**
     * Show the form for editing the specified BuyNowProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buyNowProducts = $this->buyNowProductsRepository->find($id);

        if (empty($buyNowProducts)) {
            Flash::error('Buy Now Products not found');

            return redirect(route('buyNowProducts.index'));
        }

        return view('buy_now_products.edit')->with('buyNowProducts', $buyNowProducts);
    }

    /**
     * Update the specified BuyNowProducts in storage.
     *
     * @param int $id
     * @param UpdateBuyNowProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuyNowProductsRequest $request)
    {
        $buyNowProducts = $this->buyNowProductsRepository->find($id);

        if (empty($buyNowProducts)) {
            Flash::error('Buy Now Products not found');

            return redirect(route('buyNowProducts.index'));
        }

        $buyNowProducts = $this->buyNowProductsRepository->update($request->all(), $id);

        Flash::success('Buy Now Products updated successfully.');

        return redirect(route('buyNowProducts.index'));
    }

    /**
     * Remove the specified BuyNowProducts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $buyNowProducts = $this->buyNowProductsRepository->find($id);

        if (empty($buyNowProducts)) {
            Flash::error('Buy Now Products not found');

            return redirect(route('buyNowProducts.index'));
        }

        $this->buyNowProductsRepository->delete($id);

        Flash::success('Buy Now Products deleted successfully.');

        return redirect(route('buyNowProducts.index'));
    }
}

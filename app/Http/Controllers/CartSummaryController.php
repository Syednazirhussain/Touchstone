<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartSummaryRequest;
use App\Http\Requests\UpdateCartSummaryRequest;
use App\Repositories\CartSummaryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CartSummaryController extends AppBaseController
{
    /** @var  CartSummaryRepository */
    private $cartSummaryRepository;

    public function __construct(CartSummaryRepository $cartSummaryRepo)
    {
        $this->cartSummaryRepository = $cartSummaryRepo;
    }

    /**
     * Display a listing of the CartSummary.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cartSummaries = $this->cartSummaryRepository->all();

        return view('cart_summaries.index')
            ->with('cartSummaries', $cartSummaries);
    }

    /**
     * Show the form for creating a new CartSummary.
     *
     * @return Response
     */
    public function create()
    {
        return view('cart_summaries.create');
    }

    /**
     * Store a newly created CartSummary in storage.
     *
     * @param CreateCartSummaryRequest $request
     *
     * @return Response
     */
    public function store(CreateCartSummaryRequest $request)
    {
        $input = $request->all();

        $cartSummary = $this->cartSummaryRepository->create($input);

        Flash::success('Cart Summary saved successfully.');

        return redirect(route('cartSummaries.index'));
    }

    /**
     * Display the specified CartSummary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cartSummary = $this->cartSummaryRepository->find($id);

        if (empty($cartSummary)) {
            Flash::error('Cart Summary not found');

            return redirect(route('cartSummaries.index'));
        }

        return view('cart_summaries.show')->with('cartSummary', $cartSummary);
    }

    /**
     * Show the form for editing the specified CartSummary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cartSummary = $this->cartSummaryRepository->find($id);

        if (empty($cartSummary)) {
            Flash::error('Cart Summary not found');

            return redirect(route('cartSummaries.index'));
        }

        return view('cart_summaries.edit')->with('cartSummary', $cartSummary);
    }

    /**
     * Update the specified CartSummary in storage.
     *
     * @param int $id
     * @param UpdateCartSummaryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartSummaryRequest $request)
    {
        $cartSummary = $this->cartSummaryRepository->find($id);

        if (empty($cartSummary)) {
            Flash::error('Cart Summary not found');

            return redirect(route('cartSummaries.index'));
        }

        $cartSummary = $this->cartSummaryRepository->update($request->all(), $id);

        Flash::success('Cart Summary updated successfully.');

        return redirect(route('cartSummaries.index'));
    }

    /**
     * Remove the specified CartSummary from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cartSummary = $this->cartSummaryRepository->find($id);

        if (empty($cartSummary)) {
            Flash::error('Cart Summary not found');

            return redirect(route('cartSummaries.index'));
        }

        $this->cartSummaryRepository->delete($id);

        Flash::success('Cart Summary deleted successfully.');

        return redirect(route('cartSummaries.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderHistoryRequest;
use App\Http\Requests\UpdateOrderHistoryRequest;
use App\Repositories\OrderHistoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrderHistoryController extends AppBaseController
{
    /** @var  OrderHistoryRepository */
    private $orderHistoryRepository;

    public function __construct(OrderHistoryRepository $orderHistoryRepo)
    {
        $this->orderHistoryRepository = $orderHistoryRepo;
    }

    /**
     * Display a listing of the OrderHistory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderHistories = $this->orderHistoryRepository->all();

        return view('order_histories.index')
            ->with('orderHistories', $orderHistories);
    }

    /**
     * Show the form for creating a new OrderHistory.
     *
     * @return Response
     */
    public function create()
    {
        return view('order_histories.create');
    }

    /**
     * Store a newly created OrderHistory in storage.
     *
     * @param CreateOrderHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderHistoryRequest $request)
    {
        $input = $request->all();

        $orderHistory = $this->orderHistoryRepository->create($input);

        Flash::success('Order History saved successfully.');

        return redirect(route('orderHistories.index'));
    }

    /**
     * Display the specified OrderHistory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderHistory = $this->orderHistoryRepository->find($id);

        if (empty($orderHistory)) {
            Flash::error('Order History not found');

            return redirect(route('orderHistories.index'));
        }

        return view('order_histories.show')->with('orderHistory', $orderHistory);
    }

    /**
     * Show the form for editing the specified OrderHistory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderHistory = $this->orderHistoryRepository->find($id);

        if (empty($orderHistory)) {
            Flash::error('Order History not found');

            return redirect(route('orderHistories.index'));
        }

        return view('order_histories.edit')->with('orderHistory', $orderHistory);
    }

    /**
     * Update the specified OrderHistory in storage.
     *
     * @param int $id
     * @param UpdateOrderHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderHistoryRequest $request)
    {
        $orderHistory = $this->orderHistoryRepository->find($id);

        if (empty($orderHistory)) {
            Flash::error('Order History not found');

            return redirect(route('orderHistories.index'));
        }

        $orderHistory = $this->orderHistoryRepository->update($request->all(), $id);

        Flash::success('Order History updated successfully.');

        return redirect(route('orderHistories.index'));
    }

    /**
     * Remove the specified OrderHistory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderHistory = $this->orderHistoryRepository->find($id);

        if (empty($orderHistory)) {
            Flash::error('Order History not found');

            return redirect(route('orderHistories.index'));
        }

        $this->orderHistoryRepository->delete($id);

        Flash::success('Order History deleted successfully.');

        return redirect(route('orderHistories.index'));
    }
}

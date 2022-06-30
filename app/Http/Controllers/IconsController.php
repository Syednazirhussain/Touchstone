<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIconsRequest;
use App\Http\Requests\UpdateIconsRequest;
use App\Repositories\IconsRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class IconsController extends Controller
{
    /** @var  IconsRepository */
    private $iconsRepository;

    public function __construct(IconsRepository $iconsRepo)
    {
        $this->iconsRepository = $iconsRepo;
    }

    /**
     * Display a listing of the Icons.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $icons = $this->iconsRepository->index($product_id);
        return response([ 'payload' => $icons ], 200);
    }

    /**
     * Show the form for creating a new Icons.
     *
     * @return Response
     */
    public function create()
    {
        return view('icons.create');
    }

    /**
     * Store a newly created Icons in storage.
     *
     * @param CreateIconsRequest $request
     *
     * @return Response
     */
    public function store(CreateIconsRequest $request)
    {
        $input = $request->all();

        $icons = $this->iconsRepository->create($input);

        Flash::success('Icons saved successfully.');

        return redirect(route('icons.index'));
    }

    /**
     * Display the specified Icons.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $icon = $this->iconsRepository->show($product_id, $id);
        return response([ 'payload' => $icon ], 200);
    }

    /**
     * Show the form for editing the specified Icons.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $icon = $this->iconsRepository->edit($product_id, $id);
        return response([ 'payload' => $icon ], 200);
    }

    /**
     * Update the specified Icons in storage.
     *
     * @param int $id
     * @param UpdateIconsRequest $request
     *
     * @return Response
     */
    public function update($product_id, $id, UpdateIconsRequest $request)
    {
        $response = $this->iconsRepository->update($product_id, $id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified Icons from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {
        $response = $this->iconsRepository->destroy($product_id, $id);
        return response($response, 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBannersRequest;
use App\Http\Requests\UpdateBannersRequest;
use App\Repositories\BannersRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class BannersController extends Controller
{
    /** @var  BannersRepository */
    private $bannersRepository;

    public function __construct(BannersRepository $bannersRepo)
    {
        $this->bannersRepository = $bannersRepo;
    }

    /**
     * Display a listing of the Banners.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $banners = $this->bannersRepository->index();
        return response([ 'payload' => $banners ], 200);
    }

    /**
     * Show the form for creating a new Banners.
     *
     * @return Response
     */
    public function create()
    {
        // return view('banners.create');
    }

    /**
     * Store a newly created Banners in storage.
     *
     * @param CreateBannersRequest $request
     *
     * @return Response
     */
    public function store(CreateBannersRequest $request)
    {
        dd($request->all());
        $response = $this->bannersRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Display the specified Banners.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banner = $this->bannersRepository->show($id);
        return response([ 'payload' => $banner ], 200);
    }

    /**
     * Show the form for editing the specified Banners.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banner = $this->bannersRepository->edit($id);
        return response([ 'payload' => $banner ], 200);
    }

    /**
     * Update the specified Banners in storage.
     *
     * @param int $id
     * @param UpdateBannersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBannersRequest $request)
    {
        $response = $this->bannersRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified Banners from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->bannersRepository->destroy($id);
        return response($response, 200);
    }
}

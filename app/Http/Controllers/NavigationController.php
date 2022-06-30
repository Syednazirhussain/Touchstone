<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNavigationRequest;
use App\Http\Requests\UpdateNavigationRequest;
use App\Repositories\NavigationRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class NavigationController extends Controller
{
    /** @var  NavigationRepository */
    private $navigationRepository;

    public function __construct(NavigationRepository $navigationRepo)
    {
        $this->navigationRepository = $navigationRepo;
    }

    /**
     * Display a listing of the Navigation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $navigations = $this->navigationRepository->index();
        return response([ 'payload' => $navigations ], 200);
    }

    /**
     * Get a listing of the Navigation for sorting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function sorting(Request $request)
    {
        $navigations = $this->navigationRepository->sorting();
        return response([ 'payload' => $navigations ], 200);
    }

    /**
     * Display a listing of the Navigation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create()
    {
        $navigations = $this->navigationRepository->create();
        return response([ 'payload' => $navigations ], 200);
    }


    /**
     * Store a newly created Navigation in storage.
     *
     * @param CreateNavigationRequest $request
     *
     * @return Response
     */
    public function store(CreateNavigationRequest $request)
    {
        $response = $this->navigationRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Show the form for editing the specified Navigation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $navigation = $this->navigationRepository->edit($id);
        return response([ 'payload' => $navigation ], 200);
    }

    /**
     * Update the specified Navigation in storage.
     *
     * @param int $id
     * @param UpdateNavigationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNavigationRequest $request)
    {
        $response = $this->navigationRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified Navigation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->navigationRepository->destroy($id);
        return response($response, 200);
    }
}

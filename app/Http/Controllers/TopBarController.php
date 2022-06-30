<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTopBarRequest;
use App\Http\Requests\UpdateTopBarRequest;
use App\Repositories\TopBarRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class TopBarController extends Controller
{
    /** @var  TopBarRepository */
    private $topBarRepository;

    public function __construct(TopBarRepository $topBarRepo)
    {
        $this->topBarRepository = $topBarRepo;
    }

    /**
     * Display a listing of the TopBar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $topBars = $this->topBarRepository->index();
        return response(['payload' => $topBars], 200);
    }

    /**
     * Show the form for creating a new TopBar.
     *
     * @return Response
     */
    public function create()
    {
        // return view('top_bars.create');
    }

    /**
     * Store a newly created TopBar in storage.
     *
     * @param CreateTopBarRequest $request
     *
     * @return Response
     */
    public function store(CreateTopBarRequest $request)
    {
        $response = $this->topBarRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Display the specified TopBar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $topBar = $this->topBarRepository->show($id);
        return response([ 'payload' => $topBar ], 200);
    }

    /**
     * Show the form for editing the specified TopBar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $topBar = $this->topBarRepository->edit($id);
        return response([ 'payload' => $topBar ], 200);
    }

    /**
     * Update the specified TopBar in storage.
     *
     * @param int $id
     * @param UpdateTopBarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopBarRequest $request)
    {
        $response = $this->topBarRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

    /**
     * Remove the specified TopBar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->topBarRepository->destroy($id);
        return response($response, 200);
    }
}

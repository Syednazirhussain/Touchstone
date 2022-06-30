<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLanguagesRequest;
use App\Http\Requests\UpdateLanguagesRequest;
use App\Repositories\LanguagesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class LanguagesController extends Controller
{
    /** @var  LanguagesRepository */
    private $languagesRepository;

    public function __construct(LanguagesRepository $languagesRepo)
    {
        $this->languagesRepository = $languagesRepo;
    }

    /**
     * Display a listing of the Languages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $languages = $this->languagesRepository->index();
        return response([ 'payload' => $languages ], 200);
    }

    /**
     * Store a newly created Languages in storage.
     *
     * @param CreateLanguagesRequest $request
     *
     * @return Response
     */
    public function store(CreateLanguagesRequest $request)
    {
        $response = $this->languagesRepository->store($request->except('_token'));
        return response($response, 200);
    }

    /**
     * Display the specified Languages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $languages = $this->languagesRepository->show($id);
        return response([ 'payload' => $languages ], 200);
    }

    /**
     * Show the form for editing the specified Languages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $language = $this->languagesRepository->edit($id);
        return response([ 'payload' => $language ], 200);
    }

    /**
     * Update the specified Languages in storage.
     *
     * @param int $id
     * @param UpdateLanguagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanguagesRequest $request)
    {
        $response = $this->languagesRepository->update($id);
        return response($response, 200);
    }

    /**
     * Remove the specified Languages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $response = $this->languagesRepository->destroy($id);
        return response($response, 200);
    }
}

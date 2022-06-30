<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\Repositories\SettingsRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class SettingsController extends Controller
{
    /** @var  SettingsRepository */
    private $settingsRepository;

    public function __construct(SettingsRepository $settingsRepo)
    {
        $this->settingsRepository = $settingsRepo;
    }

    /**
     * Show the form for editing the specified Settings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $type = ($request->has('type'))? $request->get('type') : 'terms';
        $setting = $this->settingsRepository->edit($id, $type);

        return response([ 'payload' => $setting ], 200);
    }

    /**
     * Update the specified Settings in storage.
     *
     * @param int $id
     * @param UpdateSettingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsRequest $request)
    {   
        $response = $this->settingsRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }

}

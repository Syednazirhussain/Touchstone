<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTranslationsRequest;
use App\Http\Requests\UpdateTranslationsRequest;
use App\Repositories\TranslationsRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class TranslationsController extends Controller
{
    /** @var  TranslationsRepository */
    private $translationsRepository;

    public function __construct(TranslationsRepository $translationsRepo)
    {
        $this->translationsRepository = $translationsRepo;
    }

    /**
     * Display a listing of the Translations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $translations = $this->translationsRepository->index();
        return response([ 'payload' => $translations ], 200);
    }

    /**
     * Show the form for editing the specified Translations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $translation = $this->translationsRepository->edit($id);
        return response([ 'payload' => $translation ], 200);
    }

    /**
     * Update the specified Translations in storage.
     *
     * @param int $id
     * @param UpdateTranslationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTranslationsRequest $request)
    {
        $response = $this->translationsRepository->update($id, $request->except('_token'));
        return response($response, 200);
    }
}

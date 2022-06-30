<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItmTranslationsRequest;
use App\Http\Requests\UpdateItmTranslationsRequest;
use App\Repositories\ItmTranslationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ItmTranslationsController extends AppBaseController
{
    /** @var  ItmTranslationsRepository */
    private $itmTranslationsRepository;

    public function __construct(ItmTranslationsRepository $itmTranslationsRepo)
    {
        $this->itmTranslationsRepository = $itmTranslationsRepo;
    }

    /**
     * Display a listing of the ItmTranslations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $itmTranslations = $this->itmTranslationsRepository->all();

        return view('itm_translations.index')
            ->with('itmTranslations', $itmTranslations);
    }

    /**
     * Show the form for creating a new ItmTranslations.
     *
     * @return Response
     */
    public function create()
    {
        return view('itm_translations.create');
    }

    /**
     * Store a newly created ItmTranslations in storage.
     *
     * @param CreateItmTranslationsRequest $request
     *
     * @return Response
     */
    public function store(CreateItmTranslationsRequest $request)
    {
        $input = $request->all();

        $itmTranslations = $this->itmTranslationsRepository->create($input);

        Flash::success('Itm Translations saved successfully.');

        return redirect(route('itmTranslations.index'));
    }

    /**
     * Display the specified ItmTranslations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itmTranslations = $this->itmTranslationsRepository->find($id);

        if (empty($itmTranslations)) {
            Flash::error('Itm Translations not found');

            return redirect(route('itmTranslations.index'));
        }

        return view('itm_translations.show')->with('itmTranslations', $itmTranslations);
    }

    /**
     * Show the form for editing the specified ItmTranslations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itmTranslations = $this->itmTranslationsRepository->find($id);

        if (empty($itmTranslations)) {
            Flash::error('Itm Translations not found');

            return redirect(route('itmTranslations.index'));
        }

        return view('itm_translations.edit')->with('itmTranslations', $itmTranslations);
    }

    /**
     * Update the specified ItmTranslations in storage.
     *
     * @param int $id
     * @param UpdateItmTranslationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItmTranslationsRequest $request)
    {
        $itmTranslations = $this->itmTranslationsRepository->find($id);

        if (empty($itmTranslations)) {
            Flash::error('Itm Translations not found');

            return redirect(route('itmTranslations.index'));
        }

        $itmTranslations = $this->itmTranslationsRepository->update($request->all(), $id);

        Flash::success('Itm Translations updated successfully.');

        return redirect(route('itmTranslations.index'));
    }

    /**
     * Remove the specified ItmTranslations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itmTranslations = $this->itmTranslationsRepository->find($id);

        if (empty($itmTranslations)) {
            Flash::error('Itm Translations not found');

            return redirect(route('itmTranslations.index'));
        }

        $this->itmTranslationsRepository->delete($id);

        Flash::success('Itm Translations deleted successfully.');

        return redirect(route('itmTranslations.index'));
    }
}

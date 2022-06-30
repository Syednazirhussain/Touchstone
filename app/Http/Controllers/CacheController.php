<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCacheRequest;
use App\Http\Requests\UpdateCacheRequest;
use App\Repositories\CacheRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CacheController extends AppBaseController
{
    /** @var  CacheRepository */
    private $cacheRepository;

    public function __construct(CacheRepository $cacheRepo)
    {
        $this->cacheRepository = $cacheRepo;
    }

    /**
     * Display a listing of the Cache.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $caches = $this->cacheRepository->all();

        return view('caches.index')
            ->with('caches', $caches);
    }

    /**
     * Show the form for creating a new Cache.
     *
     * @return Response
     */
    public function create()
    {
        return view('caches.create');
    }

    /**
     * Store a newly created Cache in storage.
     *
     * @param CreateCacheRequest $request
     *
     * @return Response
     */
    public function store(CreateCacheRequest $request)
    {
        $input = $request->all();

        $cache = $this->cacheRepository->create($input);

        Flash::success('Cache saved successfully.');

        return redirect(route('caches.index'));
    }

    /**
     * Display the specified Cache.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cache = $this->cacheRepository->find($id);

        if (empty($cache)) {
            Flash::error('Cache not found');

            return redirect(route('caches.index'));
        }

        return view('caches.show')->with('cache', $cache);
    }

    /**
     * Show the form for editing the specified Cache.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cache = $this->cacheRepository->find($id);

        if (empty($cache)) {
            Flash::error('Cache not found');

            return redirect(route('caches.index'));
        }

        return view('caches.edit')->with('cache', $cache);
    }

    /**
     * Update the specified Cache in storage.
     *
     * @param int $id
     * @param UpdateCacheRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCacheRequest $request)
    {
        $cache = $this->cacheRepository->find($id);

        if (empty($cache)) {
            Flash::error('Cache not found');

            return redirect(route('caches.index'));
        }

        $cache = $this->cacheRepository->update($request->all(), $id);

        Flash::success('Cache updated successfully.');

        return redirect(route('caches.index'));
    }

    /**
     * Remove the specified Cache from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cache = $this->cacheRepository->find($id);

        if (empty($cache)) {
            Flash::error('Cache not found');

            return redirect(route('caches.index'));
        }

        $this->cacheRepository->delete($id);

        Flash::success('Cache deleted successfully.');

        return redirect(route('caches.index'));
    }
}

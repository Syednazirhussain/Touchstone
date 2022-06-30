<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Repositories\FileRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Response;

class FileController extends Controller
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * Display a listing of the File.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($product_id, Request $request)
    {
        $files = $this->fileRepository->index($product_id);
        return response([ 'payload' => $files ], 200);
    }

    /**
     * Store a newly created File in storage.
     *
     * @param CreateFileRequest $request
     *
     * @return Response
     */
    public function store($product_id, CreateFileRequest $request)
    {
        $response = $this->fileRepository->store($product_id, $request->all());
        return response($response, 201);
    }

    /**
     * Display the specified File.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($product_id, $id)
    {
        $file = $this->fileRepository->show($product_id, $id);
        return response([ 'payload' => $file ], 200);
    }

    /**
     * Show the form for editing the specified File.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($product_id, $id)
    {
        $file = $this->fileRepository->edit($product_id, $id);
        return response([ 'payload' => $file ], 200);
    }

    /**
     * Update the specified File in storage.
     *
     * @param int $id
     * @param UpdateFileRequest $request
     *
     * @return Response
     */
    public function update($product_id, $id, UpdateFileRequest $request)
    {
        $response = $this->fileRepository->update($product_id, $id, $request->all());
        return response($response, 200);
    }

    /**
     * Remove the specified File from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($product_id, $id)
    {
        $response = $this->fileRepository->destroy($product_id, $id);
        return response($response, 200);
    }
    
}

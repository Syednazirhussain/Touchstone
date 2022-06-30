<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePasswordResetsRequest;
use App\Http\Requests\UpdatePasswordResetsRequest;
use App\Repositories\PasswordResetsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PasswordResetsController extends AppBaseController
{
    /** @var  PasswordResetsRepository */
    private $passwordResetsRepository;

    public function __construct(PasswordResetsRepository $passwordResetsRepo)
    {
        $this->passwordResetsRepository = $passwordResetsRepo;
    }

    /**
     * Display a listing of the PasswordResets.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $passwordResets = $this->passwordResetsRepository->all();

        return view('password_resets.index')
            ->with('passwordResets', $passwordResets);
    }

    /**
     * Show the form for creating a new PasswordResets.
     *
     * @return Response
     */
    public function create()
    {
        return view('password_resets.create');
    }

    /**
     * Store a newly created PasswordResets in storage.
     *
     * @param CreatePasswordResetsRequest $request
     *
     * @return Response
     */
    public function store(CreatePasswordResetsRequest $request)
    {
        $input = $request->all();

        $passwordResets = $this->passwordResetsRepository->create($input);

        Flash::success('Password Resets saved successfully.');

        return redirect(route('passwordResets.index'));
    }

    /**
     * Display the specified PasswordResets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        return view('password_resets.show')->with('passwordResets', $passwordResets);
    }

    /**
     * Show the form for editing the specified PasswordResets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        return view('password_resets.edit')->with('passwordResets', $passwordResets);
    }

    /**
     * Update the specified PasswordResets in storage.
     *
     * @param int $id
     * @param UpdatePasswordResetsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePasswordResetsRequest $request)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        $passwordResets = $this->passwordResetsRepository->update($request->all(), $id);

        Flash::success('Password Resets updated successfully.');

        return redirect(route('passwordResets.index'));
    }

    /**
     * Remove the specified PasswordResets from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        $this->passwordResetsRepository->delete($id);

        Flash::success('Password Resets deleted successfully.');

        return redirect(route('passwordResets.index'));
    }
}

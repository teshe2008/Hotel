<?php

namespace App\Http\Controllers;

use App\DataTables\FeedbackDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FeedbackController extends AppBaseController
{
    /**
     * Display a listing of the Feedback.
     *
     * @param FeedbackDataTable $feedbackDataTable
     * @return Response
     */
    public function index(FeedbackDataTable $feedbackDataTable)
    {
        return $feedbackDataTable->render('feedback.index');
    }

    /**
     * Show the form for creating a new Feedback.
     *
     * @return Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created Feedback in storage.
     *
     * @param CreateFeedbackRequest $request
     *
     * @return Response
     */
    public function store(CreateFeedbackRequest $request)
    {
        $input = $request->all();

        /** @var Feedback $feedback */
        $feedback = Feedback::create($input);

        Flash::success('Feedback saved successfully.');

        return redirect(route('feedback.index'));
    }

    /**
     * Display the specified Feedback.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Feedback $feedback */
        $feedback = Feedback::find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        return view('feedback.show')->with('feedback', $feedback);
    }

    /**
     * Show the form for editing the specified Feedback.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Feedback $feedback */
        $feedback = Feedback::find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        return view('feedback.edit')->with('feedback', $feedback);
    }

    /**
     * Update the specified Feedback in storage.
     *
     * @param  int              $id
     * @param UpdateFeedbackRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeedbackRequest $request)
    {
        /** @var Feedback $feedback */
        $feedback = Feedback::find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        $feedback->fill($request->all());
        $feedback->save();

        Flash::success('Feedback updated successfully.');

        return redirect(route('feedback.index'));
    }

    /**
     * Remove the specified Feedback from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Feedback $feedback */
        $feedback = Feedback::find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        $feedback->delete();

        Flash::success('Feedback deleted successfully.');

        return redirect(route('feedback.index'));
    }
}

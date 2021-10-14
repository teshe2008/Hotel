<?php

namespace App\Http\Controllers;

use App\DataTables\RoomsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRoomsRequest;
use App\Http\Requests\UpdateRoomsRequest;
use App\Models\Rooms;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RoomsController extends AppBaseController
{
    /**
     * Display a listing of the Rooms.
     *
     * @param RoomsDataTable $roomsDataTable
     * @return Response
     */
    public function index(RoomsDataTable $roomsDataTable)
    {
        return $roomsDataTable->render('rooms.index');
    }

    /**
     * Show the form for creating a new Rooms.
     *
     * @return Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created Rooms in storage.
     *
     * @param CreateRoomsRequest $request
     *
     * @return Response
     */
    public function store(CreateRoomsRequest $request)
    {
        $input = $request->all();

        /** @var Rooms $rooms */
        $rooms = Rooms::create($input);

        Flash::success('Rooms saved successfully.');

        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified Rooms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Rooms $rooms */
        $rooms = Rooms::find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }

        return view('rooms.show')->with('rooms', $rooms);
    }

    /**
     * Show the form for editing the specified Rooms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Rooms $rooms */
        $rooms = Rooms::find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }

        return view('rooms.edit')->with('rooms', $rooms);
    }

    /**
     * Update the specified Rooms in storage.
     *
     * @param  int              $id
     * @param UpdateRoomsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoomsRequest $request)
    {
        /** @var Rooms $rooms */
        $rooms = Rooms::find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }

        $rooms->fill($request->all());
        $rooms->save();

        Flash::success('Rooms updated successfully.');

        return redirect(route('rooms.index'));
    }

    /**
     * Remove the specified Rooms from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Rooms $rooms */
        $rooms = Rooms::find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }

        $rooms->delete();

        Flash::success('Rooms deleted successfully.');

        return redirect(route('rooms.index'));
    }
}

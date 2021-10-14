<?php

namespace App\Http\Controllers;

use App\DataTables\ReservationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Reservation;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ReservationController extends AppBaseController
{
    /**
     * Display a listing of the Reservation.
     *
     * @param ReservationDataTable $reservationDataTable
     * @return Response
     */
    public function index(ReservationDataTable $reservationDataTable)
    {
        return $reservationDataTable->render('reservations.index');
    }

    /**
     * Show the form for creating a new Reservation.
     *
     * @return Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created Reservation in storage.
     *
     * @param CreateReservationRequest $request
     *
     * @return Response
     */
    public function store(CreateReservationRequest $request)
    {
        $input = $request->all();

        /** @var Reservation $reservation */
        $reservation = Reservation::create($input);

        Flash::success('Reservation saved successfully.');

        return redirect(route('reservations.index'));
    }

    /**
     * Display the specified Reservation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Reservation $reservation */
        $reservation = Reservation::find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        return view('reservations.show')->with('reservation', $reservation);
    }

    /**
     * Show the form for editing the specified Reservation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Reservation $reservation */
        $reservation = Reservation::find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        return view('reservations.edit')->with('reservation', $reservation);
    }

    /**
     * Update the specified Reservation in storage.
     *
     * @param  int              $id
     * @param UpdateReservationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReservationRequest $request)
    {
        /** @var Reservation $reservation */
        $reservation = Reservation::find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        $reservation->fill($request->all());
        $reservation->save();

        Flash::success('Reservation updated successfully.');

        return redirect(route('reservations.index'));
    }

    /**
     * Remove the specified Reservation from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Reservation $reservation */
        $reservation = Reservation::find($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        $reservation->delete();

        Flash::success('Reservation deleted successfully.');

        return redirect(route('reservations.index'));
    }
}

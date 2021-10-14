<?php

namespace App\Http\Controllers;

use App\DataTables\HotelDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use App\Models\Hotel;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class HotelController extends AppBaseController
{
    /**
     * Display a listing of the Hotel.
     *
     * @param HotelDataTable $hotelDataTable
     * @return Response
     */
    public function index(HotelDataTable $hotelDataTable)
    {
        return $hotelDataTable->render('hotels.index');
    }

    /**
     * Show the form for creating a new Hotel.
     *
     * @return Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created Hotel in storage.
     *
     * @param CreateHotelRequest $request
     *
     * @return Response
     */
    public function store(CreateHotelRequest $request)
    {
        $input = $request->all();

        /** @var Hotel $hotel */
        $hotel = Hotel::create($input);

        Flash::success('Hotel saved successfully.');

        return redirect(route('hotels.index'));
    }

    /**
     * Display the specified Hotel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Hotel $hotel */
        $hotel = Hotel::find($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        return view('hotels.show')->with('hotel', $hotel);
    }

    /**
     * Show the form for editing the specified Hotel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Hotel $hotel */
        $hotel = Hotel::find($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        return view('hotels.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified Hotel in storage.
     *
     * @param  int              $id
     * @param UpdateHotelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHotelRequest $request)
    {
        /** @var Hotel $hotel */
        $hotel = Hotel::find($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        $hotel->fill($request->all());
        $hotel->save();

        Flash::success('Hotel updated successfully.');

        return redirect(route('hotels.index'));
    }

    /**
     * Remove the specified Hotel from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Hotel $hotel */
        $hotel = Hotel::find($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        $hotel->delete();

        Flash::success('Hotel deleted successfully.');

        return redirect(route('hotels.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationFrameRequest;
use App\Http\Requests\UpdateReservationFrameRequest;
use App\Models\ReservationFrame;
use App\Models\Room;
use Carbon\Carbon;

class ReservationFrameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservationFrames = ReservationFrame::with('room')->orderByDesc('id')->paginate(100);
        return view('reservation_frames.index', compact('reservationFrames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();
        return view('reservation_frames.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationFrameRequest $request)
    {
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        for ($day = $startDate; $day->lte($endDate); $day->addDay()) {
            ReservationFrame::create([
                'room_id' => $request->room_id,
                'date' => $day,
            ]);
        }
        return back()->with('status', '登録しました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservationFrame $reservationFrame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReservationFrame $reservationFrame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationFrameRequest $request, ReservationFrame $reservationFrame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReservationFrame $reservationFrame)
    {
        //
    }
}

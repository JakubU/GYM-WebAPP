<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ReservationsUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Prologue\Alerts\Facades\Alert;

class ReservationTicketController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function create($id)
	{
		$reservation = Reservation::findOrFail($id);
		$days[0] = $reservation->getNearDay(Carbon::now());
		for ($i = 1; $i < 3; $i++) {
			$days[$i] = $reservation->getNearDay(Carbon::parse($days[$i - 1])->addDay());
		}
		return view('reservation', [
			'reservation' => $reservation,
			'days' => $days
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, $id)
	{
		$this->validate($request, [
			'date' => 'required|date'
		]);
		if (is_null(ReservationsUser::where('reservation_id', $id)
		                            ->where('user_id', Auth::user()->id)
		                            ->where('date', $request->date)->first())) {
			$ticket = ReservationsUser::create([
				'reservation_id' => $id,
				'user_id' => Auth::user()->id,
				'date' => $request->date
			]);
			$ticket->save();
			Alert::success('Úspešne ste sa prihlásili na termín ' . Carbon::parse($request->date)->format('d.m.Y') . '.')->flash();
		} else {
			Alert::danger('Už máte rezervovaný termín ' . Carbon::parse($request->date)->format('d.m.Y') . '.')->flash();
		}
		return redirect()->route('reservation', $id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		try {
			$ticket = ReservationsUser::findOrFail($id);
			if ($ticket->user_id == Auth::user()->id) {
				Alert::success('Úspešne ste sa odhlásili z termínu ' . Carbon::parse($ticket->date)->format('d.m.Y') . '.')->flash();
				$reservationId = $ticket->reservation_id;
				$ticket->delete();
				return redirect()->route('reservation', $reservationId);
			}
			Alert::danger('Tento termín nepatrí vám.')->flash();
		} catch (\Exception $e) {
			Alert::danger('Tento termín neexistuje.')->flash();
		}
		return redirect()->route('reservations');
	}
}

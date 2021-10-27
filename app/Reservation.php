<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $dates = [
        'near_day'
    ];

    public function tickets()
    {
        return $this->hasMany(ReservationsUser::class);
    }

    public function getNearDay($from)
    {
        switch ($from->dayOfWeekIso) {
            case 1:
            case 3:
                if ($from->lte(Carbon::parse($this->time_to))) {
                    return $from->toDateString();
                }
                return $from->addDays(2)->toDateString();
            case 2:
            case 4:
                return $from->addDay()->toDateString();
            case 5:
                if ($from->lte(Carbon::parse($this->time_to))) {
                    return $from->toDateString();
                }
        }
        return $from->startOfWeek()->addWeek(1)->toDateString();
    }

    public function getNearDayAttribute() {
        return $this->getNearDay(Carbon::now());
    }

    public function near_tickets()
    {
        return $this->hasMany(ReservationsUser::class)->where('date', $this->getNearDay(Carbon::now()));
    }


}

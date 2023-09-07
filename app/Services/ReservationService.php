<?php

namespace App\Services;

use App\Models\Reservation;

class ReservationService
{
    public function paginate(int $rowsPerPage = 10)
    {
        return Reservation::paginate($rowsPerPage);
    }

    public function store()
    {
        
    }
}
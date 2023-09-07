<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DefaultResource;
use App\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct(
        protected ReservationService $reservationService
    ) {}

    public function index(Request $request)
    {
        $reservations = $this->reservationService->paginate();
        return DefaultResource::collection($reservations);
    }

    public function store(Request $request)
    {
        
    }
}

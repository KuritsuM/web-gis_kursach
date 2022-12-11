<?php

namespace App\Services\BusStopService;

use App\Repositories\BusStops\BusStopRepository;

class BusStopConfirmationService
{
    public function __construct(
        private BusStopRepository $busStopRepository
    )
    {
    }

    public function confirm(int $id, bool $confirmation): void
    {
        $confirmation ? $this->activateBusStop($id) : $this->deleteBusStop($id);
    }

    public function activateBusStop(int $id): void
    {
        $this->busStopRepository->activateBusStop($id);
    }

    public function deleteBusStop(int $id): void
    {
        $this->busStopRepository->deleteBusStop($id);
    }
}

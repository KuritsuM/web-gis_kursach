<?php

namespace App\Services\BusStopService;

use App\Repositories\BusStops\BusStopRepository;
use App\Services\BusStopService\Dto\BusStopDto;

class BusStopStoreService
{
    public function __construct(private BusStopRepository $busStopRepository)
    {
    }

    public function store(BusStopDto $busStopDto): BusStopDto
    {
        return $this->busStopRepository->store($busStopDto);
    }
}

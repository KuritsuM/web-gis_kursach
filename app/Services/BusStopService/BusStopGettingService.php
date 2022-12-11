<?php

namespace App\Services\BusStopService;

use App\Models\BusStop;
use App\Repositories\BusStops\BusStopRepository;
use App\Services\BusStopService\Transformer\BusStopTransformer;
use Illuminate\Support\Collection;

class BusStopGettingService
{
    public function __construct(
        private BusStopTransformer $transformer,
        private BusStopRepository $repository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->repository->getAll()->map(function (BusStop $busStopEntity) {
            return $this->transformer->transformEntityToDto($busStopEntity);
        });
    }
}

<?php

namespace App\Repositories\BusStops;

use App\Models\BusStop;
use App\Services\BusStopService\Dto\BusStopDto;
use Illuminate\Support\Collection;

class BusStopRepository
{
    public function store(BusStopDto $busStopDto): BusStopDto
    {
        $busStopEntity = new BusStop([
            'name'      => $busStopDto->getName(),
            'location'  => $busStopDto->getLocation(),
            'is_active' => $busStopDto->isActive()
        ]);
        $busStopEntity->save();

        $busStopDto->setId($busStopEntity->id);

        return $busStopDto;
    }

    public function getAll(): Collection
    {
        return BusStop::all();
    }

    public function findById(int $id): BusStop
    {
        return BusStop::findOrFail($id);
    }

    public function activateBusStop(int $id): void
    {
        $busStop = $this->findById($id);
        $busStop->is_active = true;
        $busStop->update();
    }

    public function deleteBusStop(int $id): void
    {
        $this->findById($id)->deleteOrFail();
    }
}

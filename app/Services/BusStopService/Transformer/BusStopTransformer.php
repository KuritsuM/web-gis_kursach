<?php

namespace App\Services\BusStopService\Transformer;

use App\Models\BusStop;
use App\Services\BusStopService\Dto\BusStopDto;
use Illuminate\Support\Collection;
use MStaack\LaravelPostgis\Geometries\Point;

class BusStopTransformer
{
    public function transformCreationRequest(array $data): BusStopDto
    {
        $dto = $this->transformRawArrayToDto(
            $this->transformWithPoint(
                $data
            )
        );
        $dto->setIsActive(false);

        return $dto;
    }

    public function transformEntityToDto(BusStop $busStop): BusStopDto
    {
        return new BusStopDto($busStop->name, $busStop->location, $busStop->id);
    }

    /**
     * @param Collection<string, Point> $data
     * @return Collection<BusStopDto>
     */
    public function transformCollectionToDto(array ...$data): Collection
    {
        $data = collect($data);

        return $data->map(function (array $data) {
            return $this->transformRawArrayToDto($data);
        });
    }

    private function transformRawArrayToDto(array $data): BusStopDto
    {
        return new BusStopDto($data['name'], $data['location']);
    }

    private function transformWithPoint(array $data): array
    {
        return array_merge(
            $data,
            [
                'location' => new Point($data['lat'], $data['lng'])
            ]
        );
    }
}

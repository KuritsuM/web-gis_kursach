<?php

namespace App\Services\BusStopService\Dto;

use MStaack\LaravelPostgis\Geometries\Point;

class BusStopDto implements \JsonSerializable
{
    private bool $isActive = true;

    public function __construct(
        private string $name,
        private Point $location,
        private ?int $id = null
    )
    {
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Point
     */
    public function getLocation(): Point
    {
        return $this->location;
    }

    /**
     * @param Point $location
     */
    public function setLocation(Point $location): void
    {
        $this->location = $location;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'coordinates' => [
                'lat' => $this->getLocation()->getLat(),
                'lng' => $this->getLocation()->getLng()
            ]
        ];
    }
}

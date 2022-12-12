<?php

namespace App\Http\Controllers\BusStop;

use App\Http\Requests\BusStop\BusStopCreationRequest;
use App\Services\BusStopService\BusStopGettingService;
use App\Services\BusStopService\BusStopStoreService;
use App\Services\BusStopService\Transformer\BusStopTransformer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class BusStopController
{
    public function __construct(
        private BusStopTransformer $busStopTransformer
    )
    {
    }

    public function index(
        BusStopGettingService $busStopGettingService
    ): Collection
    {
        return $busStopGettingService->getAll();
    }

    public function addToCreationQueue(
        BusStopCreationRequest $request,
        BusStopStoreService $busStopStoreService
    ): JsonResponse
    {Log::debug('LAT -> ' . $request->getLatitude());
        $dto = $this->busStopTransformer->transformCreationRequest($request->validated());
        $busStopStoreService->store($dto);

        return new JsonResponse([
            'success' => true,
            'message' => 'Запрос на добавление остановки добавлен на рассмотрение администратору'
        ]);
    }
}

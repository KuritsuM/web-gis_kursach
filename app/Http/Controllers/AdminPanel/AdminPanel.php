<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\Admin\BusStopConfirmationRequest;
use App\Models\BusStop;
use App\Services\BusStopService\BusStopConfirmationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminPanel
{
    public function mainPage()
    {
        return view('panel.admin', ['busStopToConfirm' => BusStop::where('is_active', '=', 'false')->get()]);
    }

    public function coordinateConfirmation(
        BusStopConfirmationRequest $request,
        BusStopConfirmationService $busStopConfirmationService
    )
    {
        $busStopConfirmationService->confirm($request->getId(), $request->getConfirmation());
        return redirect()->route('admin.main');
    }
}

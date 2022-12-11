<?php

namespace App\Http\Requests\BusStop;

use Illuminate\Foundation\Http\FormRequest;

class BusStopCreationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'lat' => 'required',
            'lng' => 'required'
        ];
    }

    public function getName(): string
    {
        return $this->validated(['name']);
    }

    public function getLatitude(): float
    {
        return (float)$this->validated(['lat']);
    }

    public function getLongitude(): float
    {
        return (float)$this->validated(['lng']);
    }
}

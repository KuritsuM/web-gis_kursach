<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Redirect;

class BusStopConfirmationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id'           => 'required|exists:bus_stops,id',
            'confirmation' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        parent::failedValidation($validator);
        Redirect::route('admin.main');
    }

    public function getId(): int
    {
        return (int)$this->validated(['id']);
    }

    public function getConfirmation(): bool
    {
        return (bool)$this->validated(['confirmation']);
    }
}

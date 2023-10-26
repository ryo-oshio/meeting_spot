<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpotRequest extends FormRequest
{
    public function rules()
    {
        return [
            'spot.title' => 'required|string|max:100',
            'spot.body' => 'required|string|max:4000',
        ];
    }
}
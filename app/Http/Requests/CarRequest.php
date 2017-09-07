<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mark' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'maxSpeed' => 'between:20,300',
            'isAutomatic' => 'required|boolean',
            'engine' => 'required',
            'numberOfDoors' => 'required|between:2,5'
        ];
    }
}

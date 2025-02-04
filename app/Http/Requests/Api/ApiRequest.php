<?php

namespace App\Http\Requests\Api;

use App\Exceptions\Api\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    //вызов иск при ровале аунт/авториз
    public function failedAuthorization()
    {
        throw new ApiException("Unauthorized", 401);
    }
    // Вызов исключения при провале валидации данных
    public function failedValidation(Validator $validator)
    {
        throw new ApiException("Unprocessable Entity", 422, $validator->errors());
    }
}

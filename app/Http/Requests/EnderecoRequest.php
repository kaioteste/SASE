<?php

namespace App\Http\Requests;

use App\Models\Endereco;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EnderecoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:80', 'unique:'.Endereco::class],
            'state' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:20'],
            'district' => ['required', 'string', 'max:50'],
            'street' => ['required', 'string', 'max:40'],
            'number' => ['required', 'integer', 'max:999999', 'min:1'],
            'user_id' => ['required', 'integer'],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->id(),
        ]);
    }
}

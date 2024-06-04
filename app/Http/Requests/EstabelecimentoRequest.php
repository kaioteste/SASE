<?php

namespace App\Http\Requests;

use App\Models\Estabelecimento;
use App\Models\Endereco;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EstabelecimentoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:80', 'unique:'.Estabelecimento::class],
            'descr' => ['required', 'string', 'max:300'],
            'phone' => ['required', 'string', 'max:15', 'unique:'.Estabelecimento::class],
            'email' => ['required',
                        'string',
                        'lowercase',
                        'email',
                        'max:255',
                        'unique:'.Estabelecimento::class
            ],
            'user_id' => ['required', 'integer'],
            'endereco_id' => ['required', 'integer'],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->id(),
        ]);

    }
}

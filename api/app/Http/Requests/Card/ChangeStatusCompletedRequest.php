<?php

namespace App\Http\Requests\Card;

use App\Http\Requests\BaseRequest;
use App\Models\Card;
use Illuminate\Validation\Rule;

class ChangeStatusCompletedRequest extends BaseRequest
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
            'status' => ['required', Rule::in(Card::STATUS)]
        ];
    }
}

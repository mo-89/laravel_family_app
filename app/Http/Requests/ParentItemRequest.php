<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'parent.name' => 'required|string|max:5',
            'child.name'  => 'required|string|max:5',
        ];
        // sample request
        // [2023-09-17 04:18:12] local.INFO: array (
        //     'parent' =>
        //     array (
        //       'name' => 'o11',
        //     ),
        //     'child' =>
        //     array (
        //       'name' => 'k11',
        //     ),
        //   )
    }
}

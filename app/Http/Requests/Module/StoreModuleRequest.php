<?php

namespace App\Http\Requests\Module;

use Illuminate\Foundation\Http\FormRequest;

class StoreModuleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'              => 'required|string|max:18', // Name is required, must be a string, and max 255 chars
            'description'       => 'nullable|string|max:150', // Description is optional, max 255 chars if present
            'icon'              => 'nullable|string|max:255', // Icon is optional, max 255 chars if present
            // Required if route_type is 2 or 3 and route_type is 0 then route is null
            'route'             => 'required_if:route_type,2,3|nullable|string|max:255',
            'route_type'        => 'required|integer', // Route type is required and must be an integer
            'priority'          => 'required|integer', // Priority is required and must be an integer
        ];
    }

    /**
     * Customize error messages for validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required'         => 'The module name is required.',
            'name.string'           => 'The module name must be a string.',
            'name.max'              => 'The module name must not be greater than 18 characters.',
            'description.string'    => 'The description must be a string.',
            'description.max'       => 'The description must not be greater than 150 characters.',
            'icon.string'           => 'The icon must be a string.',
            'route.required_if'     => 'The route is required when the route type is 2 or 3.',
            'route_type.required'   => 'Please specify the route type.',
            'priority.required'     => 'Please specify the priority for this module.',
        ];
    }
}

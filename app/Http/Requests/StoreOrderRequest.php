<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
       /*
        *    $table->foreignId('package_id')->nullable()->constrained('packages')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('subject');
            $table->longText('message')->nullable();
            $table->integer('status_active')->default(1);
            $table->integer('is_read')->default(0);
            $table->string('ip_address')->nullable();
       */
        return [
            'package_id'        => 'required|exists:pricings,id',
            'name'              => 'required|string',
            'email'             => 'nullable|email',
            'phone'             => 'required|string',
            'subject'           => 'required|string',
            'message'           => 'nullable|string',
            'status_active'     => 'nullable|integer',
            'is_read'           => 'nullable|integer',
            'ip_address'        => 'nullable|string',
        ];
    }
}

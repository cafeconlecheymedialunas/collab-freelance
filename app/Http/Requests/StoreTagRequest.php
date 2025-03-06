<?php

// app/Http/Requests/StoreTagRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:tags,name', 
            'service_id' => 'required|exists:services,id', 
        ];
    }

}


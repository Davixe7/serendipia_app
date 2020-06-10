<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StartWebCheckout extends FormRequest
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
          'name' => 'required|min:3|max:100',
          'email' => 'required|email',
          'phone' => 'required|digits:10'
        ];
    }
    
    public function attributes(){
      return [
        "phone" => "teléfono",
        "name"  => "nombre",
      ];
    }
}

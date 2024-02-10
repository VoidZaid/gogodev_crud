<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    */
   public function authorize(): bool
   {
      // TODO: debe ser tur, sino manda error al ahcer las peticiones
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
         'title' => 'required|max:255|min:3',
         'description' => 'required|max:255|min:10',
      ];
   }
   public function messages(): array
   {
      return [
         'title.required' => 'Este campo es requerido',
         'title.max' => 'El maximo de caracteres es de 255',
         'title.min' => 'El minimo de caracteres es de 3',
         'description.required' => 'Este campo es requerido',
         'description.max' => 'El maximo de caracteres es de 255',
         'description.min' => 'El minimo de caracteres es de 10',
      ];
   }
}

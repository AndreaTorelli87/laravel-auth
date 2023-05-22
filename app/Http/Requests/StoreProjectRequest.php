<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreProjectRequest extends FormRequest
{
   public function authorize()
   {
      return true;
   }
   //https://laravel.com/docs/9.x/validation#available-validation-rules
   public function rules()
   {
      return [
         "url" => "required",
         "titolo" => "required",
         "data_creazione" => "required",
         "descrizione" => "required",
      ];
   }

   public function messages() {
      return [
      //"thumb.required" => "Url dell"immagine richiesta",
      ];
   }
}

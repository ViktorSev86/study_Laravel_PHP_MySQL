<?php
    namespace App\Http\Requests;
    
    use Illuminate\Foundation\Http\FormRequest;

    class ContactRequest extends FormRequest {
        /** 
         * Determine...
         * 
         * @return bool
        */
        
        public function authorize() {
            return true; // true - пользователь может отправлять данные, даже если он не авторизован на сайте
        }

        /**
         * Get
         * 
         * @return array
         */

        public function rules() {
            return [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required|min:5|max:50',
                'message' => 'required|min:5|max:500'
            ];
        }
    
        public function attributes() { // Меняет названия атрибутов, не меняя остальной текст
            return [
                'subject' => 'тема'
            ];
        }
    
        public function messages() { // Меняет текст ошибок
            return [
                'name.required' => 'Поле имя является обязательным',
                'email.required' => 'Поле email является обязательным',
                'email.email' => 'Поле email должно быть валидным'

            ];
        }
    }
?>
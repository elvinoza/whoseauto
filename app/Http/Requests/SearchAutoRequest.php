<?php
namespace App\Http\Requests;

class SearchAutoRequest extends Request {
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        echo $this->content;

        return [
            'number' => 'required|min:6|unique',
        ];
    }

    /**
     * Error messages
     * @return array
     */
    public function messages(){
        return array(
            'number.required' => 'Please insert number.',
        );
    }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
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
            'name'=>'required|min:6|max:20',
             'email'=>'required|unique:clients',
             'password'=>'required|max:20|min:10',
        ];
        
    }
    public function messeges(){
      return[
        'name' => [
            'required' =>'We need to know your name' ,
            'max' =>'your name is to long !', 
            'min' => 'your name is tooo short !' ,
        ],
        'email' => [
            'required' => 'We need to know your email address!',
             'unique'=>'some one else had this email',
            
        ],
        'password' => [
            'required' => 'you need to whrite your password!',
            'max' => 'Your password too long!',
            'min' => 'Your password too short!',
        ],
    ];
    
    }
}

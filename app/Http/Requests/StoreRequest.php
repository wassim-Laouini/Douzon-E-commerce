<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=>'required|min:3|max:20',
             'type'=>'required|min:3|max:20',
             'image'=>'required',
             'price'=>'required|min:1|max:1000',
             'comment'=>'required|min:10|max:255',
        ];
        
    }
    public function messeges(){
      return[
        'title' => [
            'required' =>'We need to know your name' ,
            'max' =>'Your title is to long !', 
            'min' => 'Your title is tooo short !' ,
        ],
        'type' => [
            'required' => 'We need to know your article type if he is WATCH or MOBILE or somethig else ..!',
            'max' =>'This is to long !', 
            'min' => 'This is tooo short !' 
            
        ],
        'image' => [
            'required' => 'upload image is necessairy',
            
        ],
        'price' => [
            'required' => 'We need to know your article price ..!',
            'max' =>'This is to long !', 
            'min' => 'This is tooo short !' 
            
        ],
        'comment' => [
            'required' =>'description is necessairy for client ' ,
            'max' =>'Your description is to long !', 
            'min' => 'Your description is tooo short !' ,
        ],
    ];
    }
}
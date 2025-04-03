<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules=[];
        if ($this->routeIs('booking_details')) {
            $rules=[

            ];
        }
        elseif($this->routeIs('book_car')){
           $rules= [
                'first_name' => 'required',
                'last_name'  => 'required',
                'email'      => 'email|required',
                'payment_method'=> 'required',

            ];
        }
        // dd($rules);
        return $rules;
    }

}

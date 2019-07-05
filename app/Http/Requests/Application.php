<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Application extends FormRequest
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
            'high_school' =>'required',
            'school_address' =>'required',
            'when_started_highschool' =>'required',
            'when_ended_highschool' =>'required',
            'college' =>'',
            'college_address' =>'',
            'when_started_college' =>'',
            'when_ended_college' =>'',
            'high_school2' =>'',
            'school_address2' =>'',
            'when_started_highschool2' =>'',
            'when_ended_highschool2' =>'',
            'college2' =>'',
            'college_address2' =>'',
            'when_started_college2' =>'',
            'when_ended_college2' =>'',
            'high_school3' =>'',
            'school_address3' =>'',
            'when_started_highschool3' =>'',
            'when_ended_highschool3' =>'',
            'college3' =>'',
            'college_address3' =>'',
            'when_started_college3' =>'',
            'when_ended_college3' =>'',
            'firstname' =>'required',
            'lastname' =>'required',
            'surname' =>'required',
            'gender' =>'required',
            'dob' =>'required',
            'marital_status' =>'required',
            'current_address' =>'required',
            'email' =>'required|email',
            'telephone' =>'required',
            'country' =>'required',
            'id_number' =>'required',
            'religion' =>'required',
            'disabled' =>'required',
            'disability_specification' =>'',
            'clergy_type' =>'',
            'religious_order' =>'',  
            'campus' =>'required',
            'level' =>'required',
            'first_choice' =>'required',
            'second_choice' =>'required',
            'third_choice' =>'required',
            'mode_of_study' =>'required',
            'when_to_start' =>'required',
            'cuea_before' =>'',
            'previous_reg_number' =>'',
            'sponsor' =>'required',
            'sponsor_name' =>'',
            'sponsor_address' =>'',
            'sponsor_telephone' =>'',
            'sponsor_email' =>'',
            'next_of_kin' =>'required',
            'next_of_kin_address' =>'required',
            'next_of_kin_telephone' =>'required',
            'next_of_kin_email' =>'required',
            'sources' =>'required',
            'other_sources' =>'',
            'id_number_file' =>'required',
            'college_file' =>'',
            'high_school_file' =>'required',
        ];
    }
}

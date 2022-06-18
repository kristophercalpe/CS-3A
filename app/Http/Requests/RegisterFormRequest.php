<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    /*
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /*
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'password' =>[
                'required',
            ],
        ];
        if($this->getMethod() == "POST")
        {
            $rules += [
                'fullname' =>[
                    'required',
                    'unique:tbl_user,user_fullname',
                ],
                'username' =>[
                    'required',
                    'unique:tbl_user,user_username',
                ],
                'email' =>[
                    'required',
                    'email',
                    'unique:tbl_user,user_email',
                ],
            ];
        }
        if($this->getMethod() == "PUT")
        {
            $rules += [
                'fullname' =>[
                    'required',
                    Rule::unique('tbl_user', 'user_fullname')->ignore($this->user),
                ],
                'username' =>[
                    'required',
                    Rule::unique('tbl_user', 'user_username')->ignore($this->user),
                ],
                'email' =>[
                    'required',
                    'email',
                    Rule::unique('tbl_user', 'user_email')->ignore($this->user),
                ],
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return[
            'username.unique' => 'The username has already been taken.',
            'username.required' => 'The username field is required.',
        ];
    }
}

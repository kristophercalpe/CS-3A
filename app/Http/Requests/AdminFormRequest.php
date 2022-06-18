<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminFormRequest extends FormRequest
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
                    'unique:tbl_admin,admin_fullname',
                ],
                'name' =>[
                    'required',
                    'unique:tbl_admin,admin_username',
                ],
            ];
        }
        if($this->getMethod() == "PUT")
        {
            $rules += [
                'fullname' =>[
                    'required',
                    Rule::unique('tbl_admin', 'admin_fullname')->ignore($this->admin),
                ],
                'name' =>[
                    'required',
                    Rule::unique('tbl_admin', 'admin_username')->ignore($this->admin),
                ],
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return[
            'name.unique' => 'The username has already been taken.',
            'name.required' => 'The username field is required.',
        ];
    }
}

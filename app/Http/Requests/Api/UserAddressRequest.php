<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest;

class UserAddressRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch($this->method()) {
            case 'POST':
                return [
                    'province'      => 'required',
                    'city'          => 'required',
                    'district'      => 'required',
                    'address'       => 'required',
                    'zip'           => 'required',
                    'contact_name'  => 'required',
                    'contact_phone' => 'required',
                ];
                break;
            case 'PATCH':
                return [
                    'province'      => 'required',
                    'city'          => 'required',
                    'district'      => 'required',
                    'address'       => 'required',
                    'zip'           => 'required',
                    'contact_name'  => 'required',
                    'contact_phone' => 'required',
                ];
                break;
        }
    }

    public function attributes()
    {
        return [
            'province'      => '省',
            'city'          => '城市',
            'district'      => '地区',
            'address'       => '详细地址',
            'zip'           => '邮编',
            'contact_name'  => '姓名',
            'contact_phone' => '电话',
        ];
    }
}

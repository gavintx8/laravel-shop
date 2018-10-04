<?php

namespace App\Transformers;

use App\Models\UserAddress;
use League\Fractal\TransformerAbstract;

class UserAddressesTransformer extends TransformerAbstract
{
    public function transform(UserAddress $user_address)
    {
        return [
            'id' => $user_address->id,
            'province' => $user_address->province,
            'city' => $user_address->city,
            'district' => $user_address->district,
            'address' => $user_address->address,
            'zip' => $user_address->zip,
            'contact_name' => $user_address->contact_name,
            'contact_phone' => $user_address->contact_phone,
        ];
    }
}
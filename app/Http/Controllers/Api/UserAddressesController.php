<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;
use App\Transformers\UserAddressesTransformer;
use App\Models\User;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        return $this->response->collection($request->user()->addresses, new UserAddressesTransformer());
    }

    public function store(UserAddressRequest $request, UserAddress $user_address)
    {
        $user_address->fill($request->all());
        $user_address->user_id = $this->user()->id;
        $user_address->save();

        return $this->response->item($user_address, new UserAddressesTransformer())->setStatusCode(201);
    }

    public function update(UserAddress $user_address, UserAddressRequest $request)
    {
        $this->authorize('update', $user_address);

	    $user_address->update($request->all());
	    return $this->response->item($user_address, new UserAddressesTransformer());
    }

    public function destroy(UserAddress $user_address)
    {
        $this->authorize('destroy', $user_address);

	    $user_address->delete();
	    return $this->response->noContent();
    }
}

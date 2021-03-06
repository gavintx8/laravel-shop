<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['serializer:array', 'bindings']
], function ($api) {

    $api->group([
        'middleware' => 'api.throttle',
        'limit' => config('api.rate_limits.sign.limit'),
        'expires' => config('api.rate_limits.sign.expires'),
    ], function($api) {
        // 短信验证码
        $api->post('verificationCodes', 'VerificationCodesController@store')
            ->name('api.verificationCodes.store');
        // 用户注册
        $api->post('users', 'UsersController@store')
            ->name('api.users.store');
        // 图片验证码
		$api->post('captchas', 'CaptchasController@store')
		    ->name('api.captchas.store');
		// 第三方登录
		$api->post('socials/{social_type}/authorizations', 'AuthorizationsController@socialStore')
		    ->name('api.socials.authorizations.store');
		// 登录
		$api->post('authorizations', 'AuthorizationsController@store')
		    ->name('api.authorizations.store');
		// 刷新token
		$api->put('authorizations/current', 'AuthorizationsController@update')
		    ->name('api.authorizations.update');
		// 删除token
		$api->delete('authorizations/current', 'AuthorizationsController@destroy')
		    ->name('api.authorizations.destroy');

		// 需要 token 验证的接口
	    $api->group(['middleware' => 'api.auth'], function($api) {
	            // 当前登录用户信息
	            $api->get('user', 'UsersController@me')
	                ->name('api.user.show');
	            // 编辑登录用户信息
				$api->patch('user', 'UsersController@update')
				    ->name('api.user.update');
	            // 图片资源
			    $api->post('images', 'ImagesController@store')
			        ->name('api.images.store');
			    // 用户地址列表
			    $api->get('user_addresses', 'UserAddressesController@index')
			        ->name('api.user_addresses.index');
			    // 添加用户地址
			    $api->post('user_addresses', 'UserAddressesController@store')
			        ->name('api.user_addresses.store');
			    // 编辑用户地址
			    $api->patch('user_addresses/{user_address}', 'UserAddressesController@update')
			        ->name('api.user_addresses.update');
			    // 删除用户地址
			    $api->delete('user_addresses/{user_address}', 'UserAddressesController@destroy')
			        ->name('api.user_addresses.destroy');
			    // 分类列表
				$api->get('categories', 'CategoriesController@index')
				    ->name('api.categories.index');
	        });    

    });

});
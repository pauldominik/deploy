<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get(config('deploy.route').'/{deploy_token?}', '\Pauldominik\Deploy\DeployController@deploy_now');

Route::get('deploy2', function() {
	return var_dump('hey');
});

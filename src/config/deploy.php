<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Deploy URL
	|--------------------------------------------------------------------------
	|
	| Specify the route that will be used by your git hook in updating your code
	|
	*/

	'route' => env('DEPLOY_ROUTE', 'deploy'),
	'token' => env('DEPLOY_TOKEN', 'someRandomToken'),

];

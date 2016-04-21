# pauldominik/deploy

A Laravel 5 package for deploying projects through git hooks

## Installation

- add pauldominik/deploy in your main composer reqs
- in config('app.providers'), append 'Pauldominik\Deploy\DeployServiceProvider::class'
- in config('app.aliases'), append 'Deploy' => Pauldominik\Deploy\DeployFacade::class
- publish config and views: $ php artisan vendor:publish
- env globals available: DEPLOY_ROUTE and DEPLOY_TOKEN

<?php

namespace Pauldominik\Deploy;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeployController extends Controller
{

	/**
	 * Runs an array of shell commands and returns an array of corresponding shell output.
	 *
	 * @param  array  $commands
	 * @return array
	 */
	private function run_commands(array $commands)
	{
		foreach($commands as $command)
			$outputBucket[$command] = shell_exec($command);
		return $outputBucket;
	}

	public function deploy_now($token=null)
	{
		if ($token == config('deploy.token'))
		{
			return response()->json($this->run_commands(['pwd', 'git pull']));
		}
		else
		{
			return 'Token Mismatch';
		}
	}
}

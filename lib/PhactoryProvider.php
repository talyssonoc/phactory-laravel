<?php

namespace PhactoryLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Phactory\Sql\Phactory;

class PhactoryProvider extends ServiceProvider {
	public function boot() {
		$factoriesPath = app_path() . '/Factories';

		foreach (glob("{$factoriesPath}/*") as $filename) {
			require $filename;
		}
	}

	public function register() {
		$this->app->bind('Phactory', function() {
			return new Phactory(DB::connection()->getPdo());
		});
	}
}

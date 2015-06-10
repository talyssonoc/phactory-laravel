<?php

namespace PhactoryLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Phactory\Sql\Phactory as PhactoryClass;

class PhactoryServiceProvider extends ServiceProvider {
	public function boot() {
		$factoriesPath = app_path() . '/Factories';

		foreach (glob("{$factoriesPath}/*") as $filename) {
			require $filename;
		}
	}

	public function register() {
		$this->app->bind('Phactory', function() {
			return new PhactoryClass(DB::connection()->getPdo());
		});
	}
}

<?php

use Illuminate\Support\Facades\Facade;

class Phactory extends Facade {
  protected static function getFacadeAccessor() {
    return 'Phactory';
  }
}
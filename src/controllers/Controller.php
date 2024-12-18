<?php

namespace Dsw\Tema6\Controllers;

use Philo\Blade\Blade;

abstract class Controller {
  protected $blade;

  public function __construct()
  {
    
    $view = '../src/views';
    $cache = '../cache';
    $this->blade = new Blade($view, $cache); 
  }
}

?>
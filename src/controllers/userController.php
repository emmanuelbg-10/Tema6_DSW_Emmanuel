<?php
namespace Dsw\Tema6\Controllers;

class UserController {
  public function index() {
    require __DIR__ . '/../views/user.php';
  }

  public function show ($param) {
    $id = $param['id'];
    require __DIR__ . '/../views/user-detail.php';
  }
}


?>
<?php

namespace Dsw\Tema6\Controllers;

use Dsw\Tema6\Dao\UserImplement;

class UserController extends Controller
{

  public function index()
  {
    $userDAO = new UserImplement();
    $users = $userDAO->findAll();
    echo $this->blade->view()->make('user.index', compact('users'))->render();
  }

  public function show($param)
  {
    $id = $param['id'];
    // Busco en base datos:
    $userDAO = new UserImplement();
    $user = $userDAO->findById($id);
    $data = [
      'user' => $user,
      'title' => 'usuario'
    ];
    echo $this->blade->view()->make('user.show', $data)->render();
  }
}

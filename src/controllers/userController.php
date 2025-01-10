<?php

namespace Dsw\Tema6\Controllers;

use Dsw\Tema6\Dao\UserImplement;

class UserController extends Controller{

  public function index() {
    $userDAO = new UserImplement();
    $users = $userDAO->findAll();
    echo $this->blade->view()->make('user.index', compact('users'))->render();

  }

  public function show($param) {
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
  public function create() {
    echo $this->blade->view()->make('user.create')->render();
  }

  public function post() {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    printf("Los datos son %s, %s, %s.", $name, $surname, $email);
    $userDAO = new UserImplement();
    $userDAO->create($name, $surname, $email);
    $this->index();
  }
  public function delete($param) {
    $id = $param['id'];
    echo "Eliminando el usuario con id: " . $id;
  }
}
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
    $userDAO = new UserImplement();
    $userDAO->create($name, $surname, $email);
    $this->index();
  }

  public function delete($param) {
    $id = $param['id'];
    $userDAO = new UserImplement();
    $userDAO->delete($id);
    $this->index();
  }

  public function edit($param) {
    $id = $param['id'];
    $userDAO = new UserImplement();
    $user = $userDAO->findById($id);
    echo $this->blade->view()->make('user.edit', compact("user"))->render();
  }

  public function put($param) {
    $id = $param['id'];
    var_dump($_POST);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $userDAO = new UserImplement();
    $userDAO->update($id, $name, $surname, $email);
    $this->index();
  }
}
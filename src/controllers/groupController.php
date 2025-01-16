<?php

namespace Dsw\Tema6\Controllers;

use Dsw\Tema6\Dao\GroupImplement;
use Dsw\Tema6\Dao\UserImplement;

class GroupController extends Controller{

  public function index() {
    $groupDAO = new GroupImplement();
    $groups = $groupDAO->findAll();
    echo $this->blade->view()->make('group.index', compact('groups'))->render();

  }

  public function show($param) {
    $id = $param['id'];
    // Busco en base datos:
    $groupDAO = new GroupImplement();
    $group = $groupDAO->findById($id);
    $data = [
       'group' => $group,
       'title' => 'Grupo'
    ];
    echo $this->blade->view()->make('group.show', $data)->render();
  }

  public function create() {
    echo $this->blade->view()->make('group.create')->render();
  }

  public function post() {
    $name = $_POST['name'];
    $groupDAO = new GroupImplement();
    $groupDAO->create($name);
    $this->index();
  }

  public function delete($param) {
    $id = $param['id'];
    $groupDAO = new GroupImplement();
    $groupDAO->delete($id);
    $this->index();
  }

  public function edit($param) {
    $id = $param['id'];
    $groupDAO = new GroupImplement();
    $group = $groupDAO->findById($id);
    echo $this->blade->view()->make('group.edit', compact("group"))->render();
  }

  public function put($param) {
    $id = $param['id'];
    $name = $_POST['name'];
    $groupDAO = new GroupImplement();
    $groupDAO->update($id, $name);
    $this->index();
  }

  public function users($param) {
    $id_group = $param['id'];
    $groupDAO = new GroupImplement();
    $group = $groupDAO->findById($id_group);

    $userDAO = new UserImplement();
    $users = $userDAO->findAll();

    $usersBelong = $group->users();
    $usersBelongId = array_map(
      fn($user) => $user->getId(), 
      $usersBelong
    );

    echo $this->blade->view()->make('group.users', compact('group', 'users', 'usersBelongId'))->render();
  }

  public function postusers($param) {
    $id_group = $param['id'];
    echo $id_group;
    echo "<br>";
    var_dump($_POST);
  }
}
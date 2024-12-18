<?php

namespace Dsw\Tema6\Models;

class User {
  static private $users = [
    ['id' => '1', 'name' => 'Pepe', 'surname' => 'Garcia'],
    ['id' => '2', 'name' => 'Ana', 'surname' => 'Martinez'],
    ['id' => '3', 'name' => 'Juan', 'surname' => 'Lopez'],
    ['id' => '4', 'name' => 'Maria', 'surname' => 'Gonzalez'],
    ['id' => '5', 'name' => 'Carlos', 'surname' => 'Fernandez'],
    ['id' => '6', 'name' => 'Lucia', 'surname' => 'Rodriguez'],
    ['id' => '7', 'name' => 'Miguel', 'surname' => 'Sanchez'],
    ['id' => '8', 'name' => 'Laura', 'surname' => 'Perez'],
    ['id' => '9', 'name' => 'David', 'surname' => 'Gomez'],
    ['id' => '10', 'name' => 'Elena', 'surname' => 'Diaz']
  ];

  public static function all() {
    return self::$users;
  }

  public static function get($id) {
    return array_first(self::$users, function($user) use ($id) {
      return $user['id'] == $id;
    });
  }
}
?>
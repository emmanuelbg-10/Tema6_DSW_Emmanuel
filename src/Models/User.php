<?php

namespace Dsw\Tema6\Models;
use PDO;
use PDOException;


class User {

  static private $link;

  public function __construct()
  {
    $host = 'localhost';
    $db = 'capasdb';
    $user = 'root';
    $pw = '';
    
    try {
      self::$link = new PDO("mysql:host=$host;dbname=$db", $user, $pw);
      self::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
      die("Error en la conexión, mensaje de error: ". $ex->getMessage());
    }
   }

  public static function all() {
    $stmt = self::$link->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;

  }

  public static function get($id) {
    // return array_first(self::$users, function($user) use ($id) {
    //   return $user['id'] == $id;
    // });
  }
}
?>
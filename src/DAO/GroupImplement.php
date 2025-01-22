<?php

namespace Dsw\Tema6\Dao;

use Dsw\Tema6\Database\Database;
use Dsw\Tema6\Models\Group;
use PDO;

class GroupImplement
{
  private Database $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function findAll(): array
  {
    $query = 'SELECT * FROM `groups`';
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->execute();
    $groups = [];
    while ($groupRecord = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $group = new Group(
        $groupRecord['id'],
        $groupRecord['name']
      );
      $groups[] = $group;
    }
    return $groups;
  }

  public function findById(int $id): Group | null
  {
    $query = "SELECT * FROM `groups` WHERE id = :id";
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $groupRecord = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($groupRecord == null) {
      return null;
    } else {
      return new Group(
        $groupRecord['id'],
        $groupRecord['name'],
      );
    }
  }

  public function create(string $name)
  {
    $query = "INSERT INTO `groups` (name) VALUES (:name)";
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
  }

  public function delete(int $id)
  {
    $query = "DELETE FROM `groups` WHERE id = :id";
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
  }

  public function update(int $id, string $name)
  {
    $query = "UPDATE `groups` SET name=:name WHERE id = :id";
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
  }

  public function findGroupsByUserId(int $id)
  {
    $query = 'SELECT id, name FROM `groups` INNER JOIN group_user ON groups.id = group_user.id_group WHERE group_user.id_user = :id';
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $groups = [];
    while ($groupRecord = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $group = new Group(
        $groupRecord['id'],
        $groupRecord['name']
      );
      $groups[] = $group;
    }
    return $groups;
  }

  public function deleteUsers(array $id_users, $id_group)
  {
    $id_user = null;
    $query = 'DELETE FROM group_user WHERE id_user = :id_user AND id_group = :id_group';
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':id_group', $id_group);
    foreach ($id_users as $id_user) {
      $stmt->execute();
    }
  }

  public function insertUsers(array $id_users, $id_group)
  {
    $id_user = null;
    $query = 'INSERT INTO group_user (id_user, id_group) VALUES (:id_user, :id_group)';
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':id_group', $id_group);
    foreach ($id_users as $id_user) {
      $stmt->execute();
    }
  }
}

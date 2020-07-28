<?php
  class AdminUser extends Db {
    protected function getAdmin($name,$password) {
      $sql = "SELECT * FROM tbladmin WHERE AdminuserName = ? AND AdminPassword = ? ";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name,$password]);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setApplicant($name, $password) {
      $pdo=$this->connect();
      $sql = "INSERT INTO tbladmin(AdminuserName, AdminPassword) VALUES (?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$name, $password]);
    }
  }
?>
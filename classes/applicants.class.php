<?php
  class Applicants extends Db {
    protected function getApplicant($name) {
      $sql = "SELECT * FROM applicant WHERE ename = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name]);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setApplicant($title, $ename, $mmname,$gender) {
      $pdo=$this->connect();
      $sql = "INSERT INTO applicant(title, ename, mmname,gender) VALUES (?, ?, ?,?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$title, $ename, $mmname,$gender]);
    }
    protected function searchApplicant($name) {
      $sql = "SELECT * FROM applicant WHERE ename = ? OR citizenid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name,$name]);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
  }
?>
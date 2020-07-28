<?php
  class Address extends Db {
    protected function getAddressByEmail($email) {
      $sql = "SELECT * FROM addresst WHERE email = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$email]);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function getAddressByMobile($mobile) {
      $sql = "SELECT * FROM addresst WHERE mobile = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$mobile]);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setAddress($addressno, $street, $township,$city, $zipcode, $telephone, $mobile, $facebook, $email) {
      $pdo=$this->connect();
      $sql = "INSERT INTO addresst(addressno, street, township, city, zipcode, telephone, mobile, facebook, email) VALUES (?, ?, ?, ?, ? , ? , ? , ? , ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$addressno, $street, $township,$city, $zipcode, $telephone, $mobile, $facebook,$email]);
    }
  }
?>
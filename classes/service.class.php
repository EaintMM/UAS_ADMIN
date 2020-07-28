<?php
  class Service extends Db {
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
    protected function searchApplicantByName($name) {
      $sql = "SELECT * FROM applicant WHERE ename = ? OR citizenid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name,$name]);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
    protected function searchApplicantByEmail($name) {
        $sql = "SELECT * FROM addresst WHERE email = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
      }
      protected function searchApplicantByAddressId($addressid) {
        $sql = "SELECT * FROM applicant WHERE addressid = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$addressid]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
      }
      protected function searchApplicant($data) {
        //"select tbladmapplications.CourseApplied,tbladmapplications.ID as apid, tbluser.FirstName,tbluser.LastName,tbluser.MobileNumber,tbluser.Email from  tbladmapplications inner join tbluser on tbluser.ID=tbladmapplications.UserId where tbluser.FirstName like '%$sdata%' || tbluser.MobileNumber like '%$sdata%' || tbluser.Email like '%$sdata%'"
        $sql = "SELECT applicant.syllabus, applicant.ename, applicant.mmname, addresst.mobile, addresst.email, applicant.status FROM applicant join addresst on applicant.addressid=addresst.id WHERE applicant.ename = ? OR applicant.citizenid = ? OR addresst.email = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$data,$data,$data]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
      }
  }
?>
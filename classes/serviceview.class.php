<?php
  class ServiceView extends Service {
    public function searchedApplications($name) {
      $res1 = $this->searchApplicantByName($name);

      if($res1>0){
        return $res1;
      }
      else{
        $res = $this->searchApplicantByEmail($name);
        if($res > 0){
            $res1 = $this->searchApplicantByAddressId($res[0]['id']);
        }
      }
      return $res1;
     // echo "Full name: " . $results[0]['title'] . " " . $results[0]['ename'] . "<br>";
     // echo "Gender: " . $results[0]['gender'];
    }
    public function searchedApplication($name) {
      $res = $this->searchApplicant($name);
      return $res;
    }
    
  }
?>
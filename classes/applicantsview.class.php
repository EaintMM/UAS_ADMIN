<?php
  class ApplicantsView extends Applicants {
    public function showApplicant($name) {
      $results = $this->getApplicant($name);
      echo "Full name: " . $results[0]['title'] . " " . $results[0]['ename'] . "<br>";
      echo "Gender: " . $results[0]['gender'];
    }
    
  }
?>
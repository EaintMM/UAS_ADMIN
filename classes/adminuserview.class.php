<?php
  class AdminUserView extends AdminUser {
    public function showAdmin($name,$password) {
      $results = $this->getAdmin($name,$password);
      $msgg = "yes";
      if($results>0){
        $_SESSION['aid']=$results[0]['ID'];
       header('location:dashboard.php');
      }
      else{
        $msgg = "no";
      //echo "Invalid Details.";
      //return "no";
      //header('location:login.php?msg='.$msg);
      //Header("Location: query.php?user=".$user);
      }
      return $msgg;
     // echo "Full name: " . $results[0]['title'] . " " . $results[0]['ename'] . "<br>";
     // echo "Gender: " . $results[0]['gender'];
    }
    
  }
?>
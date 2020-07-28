<?php
  class AddressContr extends Address {
    public function createAddress($addressno, $street, $township,$city, $zipcode, $telephone, $mobile, $facebook, $email) {
        $results = $this->getAddressByMobile($mobile);
        if(empty($results)){
            $this->setAddress($addressno, $street, $township,$city, $zipcode, $telephone, $mobile, $facebook, $email);
        }
        else{
            echo "no insertion";
        }
      
    }
  }
